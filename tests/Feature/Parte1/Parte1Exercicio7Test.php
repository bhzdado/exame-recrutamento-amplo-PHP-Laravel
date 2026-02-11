<?php

namespace Tests\Feature\Parte2;

use App\Http\Controllers\parte1\Parte1Exercicio5Controller;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Fluent\AssertableJson;
use ReflectionClass;
use Tests\TestCase;

class Parte1Exercicio7Test extends TestCase
{
    use RefreshDatabase; 

    /** @test */
    public function CorrigeExercicio7Parte1()
    {
        $response = $this->get('/parte1/exercicio7');

        $response->assertStatus(200);

        $dados = $response->json();

        // Valida 12 meses
        $this->assertCount(12, $dados);

        // Valida Janeiro (index 0) -> 31 dias
        $this->assertCount(31, $dados[0]);

        // Valida Fevereiro (index 1) -> 28 dias
        $this->assertCount(28, $dados[1]);

        // Valida se o primeiro dia de Janeiro tem chave "1" (base 1)
        $this->assertArrayHasKey('1', $dados[0], 'O index dos dias deve começar em 1.');
        
        // Valida se não existe o index 0 nos dias
        $this->assertArrayNotHasKey('0', $dados[0]);
    }
}