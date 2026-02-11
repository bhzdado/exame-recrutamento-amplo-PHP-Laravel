<?php

namespace App\Http\Controllers\parte1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Parte1Exercicio7Controller extends Controller
{
    /*
        Rota: parte1/exercicio7
    */
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //Utilizando laços de repetição, crie uma matriz contendo os 12 meses do ano com seus respectivos dias.
        //Considere index base 0 para meses e base 1 para dias.

        //O tamanho do array de dias deve coincidir com o total de dias do respectivo mês.
        //Ex: Dias de fevereiro = array com tamanho 28.

        //DESCONSIDERE anos bissextos.

        $calendario = [];

        return $calendario;
    }
}
