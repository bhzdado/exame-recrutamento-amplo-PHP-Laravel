<?php

namespace App\Http\Controllers\parte1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Parte1Exercicio1Controller extends Controller
{
    /*
        Rota: parte1/exercicio1
    */
    private $idade = [20, 21, 18, 35, 28, 26, 26, 25, 19, 20, 20, 30, 31, 39];
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //Escreva abaixo um código que retorne (como você preferir) todos os números da lista de idades acima, separados por '-' sem espaços.

        return implode('-', $this->idade);
    }
}
