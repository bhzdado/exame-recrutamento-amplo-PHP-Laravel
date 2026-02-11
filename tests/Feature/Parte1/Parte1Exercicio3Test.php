<?php

namespace Tests\Feature\Parte1;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Parte1Exercicio3Test extends TestCase
{
    use RefreshDatabase; 

    /** @test */
    public function CorrigeExercicio3Parte1()
    {
        $valorEsperado = 878;

        $response = $this->get('/parte1/exercicio3');

        $response->assertStatus(200);

        $this->assertEquals($valorEsperado, $response->getContent());

        $response->assertStatus(200);

    }
}