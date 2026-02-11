<?php

namespace App\Http\Controllers\parte1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Exemplo de Functional Interface
interface OperacaoMatematica
{
    public function calcular($a, $b);
}

// Exemplo de METHOD REFERENCE
class Calculadora
{
    public static function multiplicar($a, $b)
    {
        return $a * $b;
    }
}

class Parte1Exercicio5Controller extends Controller
{
    /*
        Rota: parte1/exercicio5
    */
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //Crie uma interface funcional (Functional Interface) no contexto desta classe e escreva abaixo um código
        // de exemplo de LAMBDA e METHOD REFERENCE utilizando a interface criada.

        // Lambda
        $soma = fn($a, $b) => $a + $b;

        // Method reference
        $multiplicacao = [Calculadora::class, 'multiplicar'];

        $resultadoSoma = $soma(5, 3);
        $resultadoMultiplicacao = $multiplicacao(5, 3);

        return [
            'resultadoSoma' => $resultadoSoma,
            'resultadoMultiplicacao' => $resultadoMultiplicacao
        ];
    }
}
