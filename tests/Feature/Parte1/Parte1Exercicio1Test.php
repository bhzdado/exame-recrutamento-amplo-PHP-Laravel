<?php

namespace Tests\Feature\Parte2;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Parte1Exercicio1Test extends TestCase
{
    use RefreshDatabase; 

    /** @test */
    public function CorrigeExercicio1Parte1()
    {
        $esperado = "20-21-18-35-28-26-26-25-19-20-20-30-31-39";

        $response = $this->get('/parte1/exercicio1');

        $response->assertStatus(200);

        $response->assertSee($esperado);
        
        $this->assertStringContainsString('1', $response->getContent());
    
    $response->assertStatus(200);

    }
}