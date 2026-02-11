<?php

namespace Tests\Feature\Parte2;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\File;
use Tests\TestCase;

class Parte1Exercicio11Test extends TestCase
{
    use RefreshDatabase; 

    /** @test */
    public function CorrigeExercicio11Parte1()
    {

        $response = $this->get('/parte1/exercicio11');

        $response->assertStatus(200);

        $data = $response->original; // Acessa o conteúdo retornado pelo controller
        
        $anoInicial = (int) date('Y');
        $anoFinal = $anoInicial + 10;

        // 1. Validar intervalo de anos (inclusivo = 11 anos)
        $this->assertCount(11, $data);
        $this->assertEquals($anoInicial, array_key_first($data));
        $this->assertEquals($anoFinal, array_key_last($data));

        // 2. Validar estrutura de um ano específico
        foreach ($data as $ano => $meses) {
            $this->assertCount(12, $meses, "O ano $ano deve ter 12 meses.");
            
            // Validar Fevereiro (Index 1) para anos bissextos
            $isBissexto = (($ano % 100 == 0) ? ($ano % 400 == 0) : ($ano % 4 == 0));
            $diasFevereiro = count($meses[1]);
            
            if ($isBissexto) {
                $this->assertEquals(29, $diasFevereiro, "Ano $ano é bissexto, Fevereiro deve ter 29 dias.");
            } else {
                $this->assertEquals(28, $diasFevereiro, "Ano $ano não é bissexto, Fevereiro deve ter 28 dias.");
            }

            // Validar um mês de 31 dias (ex: Janeiro - Index 0)
            $this->assertCount(31, $meses[0]);
        }
    }
}