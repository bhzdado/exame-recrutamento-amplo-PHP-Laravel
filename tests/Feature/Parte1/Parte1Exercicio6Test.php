<?php

namespace Tests\Feature\Parte1;

use App\Http\Controllers\parte1\Parte1Exercicio5Controller;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Fluent\AssertableJson;
use ReflectionClass;
use Tests\TestCase;

class Parte1Exercicio6Test extends TestCase
{
    use RefreshDatabase; 

    /** @test */
    public function CorrigeExercicio6Parte1()
    {
        $response = $this->get('/parte1/exercicio6');

        $response->assertStatus(200);

        $response->assertJson(fn (AssertableJson $json) =>
            $json->has(6) 
                 ->where('0.matricula', 2)
                 ->where('1.matricula', 3)
                 ->where('2.matricula', 7)
                 ->where('3.matricula', 8)
                 ->where('4.matricula', 11)
                 ->where('5.matricula', 19)
                 ->etc()
        );

    }
}