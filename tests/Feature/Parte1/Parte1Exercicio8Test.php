<?php

namespace Tests\Feature\Parte1;

use App\Http\Controllers\parte1\Parte1Exercicio5Controller;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Fluent\AssertableJson;
use ReflectionClass;
use Tests\TestCase;

class Parte1Exercicio8Test extends TestCase
{
    use RefreshDatabase; 

    /** @test */
    public function CorrigeExercicio8Parte1()
    {
        $response = $this->get('/parte1/exercicio8');

        $response->assertStatus(200);

        $esperado = [
            "Djavan" => ["Nem um Dia", "Oceano", "Um Amor Puro"],
            "Elis Regina" => ["Alô, alô marciano", "Como Nossos Pais", "O Bêbado e a Equilibrista"],
            "Tim Maia" => ["Ela Partiu", "Gostava Tanto de Você", "Não Quero Dinheiro", "O Descobridor Dos Sete Mares"],
            "Antonio Carlos Jobim" => ["Chega de Saudade", "Garota de Ipanema", "Wave"]
        ];

        $dadosRetornados = $response->json();
        $this->assertEquals($esperado, $dadosRetornados, "O array retornado não coincide com o esperado ou a ordenação está incorreta.");
    }
}