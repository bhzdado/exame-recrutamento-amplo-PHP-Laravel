<?php

namespace Tests\Feature\Parte1;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Parte1Exercicio4Test extends TestCase
{
    use RefreshDatabase; 

    /** @test */
    public function CorrigeExercicio4Parte1()
    {
        $valorEsperado = 878;

        $response = $this->get('/parte1/exercicio4');

        $response->assertStatus(200);

        $dados = $response->getOriginalContent();

        $this->assertIsArray($dados, "O retorno deve ser um array.");
        $this->assertCount(2, $dados, "Deveriam existir apenas 2 números ímpares (15 e 45).");
        $this->assertContains(15, $dados);
        $this->assertContains(45, $dados);
        $this->assertNotContains(6, $dados, "O número 6 é par e não deve estar no array.");

    }
}