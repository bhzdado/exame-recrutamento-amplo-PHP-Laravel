<?php

namespace Tests\Feature\Parte1;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Parte1Exercicio2Test extends TestCase
{
    use RefreshDatabase; 

    /** @test */
    public function CorrigeExercicio2Parte1()
    {
        $esperado = [18, 19, 20, 20, 20, 21, 25, 26, 26, 28, 30, 31, 35, 39];

        $response = $this->get('/parte1/exercicio2');

        $response->assertStatus(200);

        $conteudo = $response->getOriginalContent();

        $this->assertEquals($esperado, $conteudo, "O array retornado não está ordenado corretamente.");

        $response->assertStatus(200);

    }
}