<?php

namespace Tests\Feature\Parte2;

use App\Http\Controllers\parte1\Parte1Exercicio5Controller;
use Illuminate\Foundation\Testing\RefreshDatabase;
use ReflectionClass;
use Tests\TestCase;

class Parte1Exercicio5Test extends TestCase
{
    use RefreshDatabase; 

    /** @test */
    public function CorrigeExercicio5Parte1()
    {
        $response = $this->get('/parte1/exercicio5');

        $response->assertStatus(200);

        $caminhoArquivo = (new ReflectionClass(Parte1Exercicio5Controller::class))->getFileName();
        $conteudo = file_get_contents($caminhoArquivo);

        // Valida presença de 'interface'
        $this->assertStringContainsString('interface', $conteudo, 'O aluno não criou uma interface.');

        // Valida presença de Lambda (fn ou function($...) )
        $possuiLambda = str_contains($conteudo, 'fn(') || str_contains($conteudo, 'function(');
        $this->assertTrue($possuiLambda, 'O aluno não utilizou uma Lambda.');

        // Valida Method Reference (uso de array callable [$this, 'metodo'] ou 'self::metodo')
        $possuiMethodRef = str_contains($conteudo, '[$this') || str_contains($conteudo, '[\$this');
        $this->assertTrue($possuiMethodRef, 'O aluno não utilizou um Method Reference.');

    }
}