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

        for ($mes = 0; $mes < 12; $mes++) {

            if ($mes === 1) {
                // Fevereiro
                $dias = 28;
            } elseif ($mes < 7) {
                // Janeiro a Julho
                $dias = ($mes % 2 === 0) ? 31 : 30;
            } else {
                // Agosto a Dezembro
                $dias = ($mes % 2 === 1) ? 31 : 30;
            }

            $calendario[$mes] = range(1, $dias);
        }

        return $calendario;
    }
}
