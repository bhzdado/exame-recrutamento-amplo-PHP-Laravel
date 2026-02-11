<?php

namespace Tests\Feature\Parte2;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\File;
use Tests\TestCase;

class Parte1Exercicio10Test extends TestCase
{
    use RefreshDatabase; 

    /** @test */
    public function CorrigeExercicio10Parte1()
    {
        $path = storage_path("numeros-da-sorte.txt");

        // Garante que o arquivo não existe antes do teste
        if (File::exists($path)) {
            File::delete($path);
        }

        $response = $this->get('/parte1/exercicio10');

        $response->assertStatus(200);

        $this->assertTrue(File::exists($path), "O arquivo não foi criado em: $path");

        $conteudo = File::get($path);
        $linhas = explode(PHP_EOL, trim($conteudo));

        $this->assertCount(12, $linhas);

        $primeiraLinhaEsperada = "53.7 => 53";
        $ultimaLinhaEsperada = "3.4 => 4";

        $this->assertEquals($primeiraLinhaEsperada, $linhas[0]);
        $this->assertEquals($ultimaLinhaEsperada, end($linhas));
    }
}