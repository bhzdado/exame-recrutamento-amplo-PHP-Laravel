<?php

namespace App\Http\Controllers\parte1;

use App\Http\Controllers\Controller;
use File;
use Illuminate\Http\Request;

class Parte1Exercicio11Controller extends Controller
{
    /*
        Rota: parte1/exercicio10
    */

    public function __construct()
    {

    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Utilizando laços de repetição crie um Map (com chaves ordenadas crescentemente) contendo como chave o
        // ano atual até ano atual + 10 (inclusivo), e como valores de cada chave ano uma matriz contendo os 12 meses e
        // seus respectivos dias do mês.
        // Considere index base 1 para anos e dias e base 0 para meses.
        //Ex: Ano 2023 -> matriz com os 12 meses e seus dias

        // O tamanho do array de dias deve coincidir com o total de dias do respectivo mês.
        // Ex: Dias de fevereiro = array com tamanho 28 ou 29 para anos bissextos.

        // CONSIDERE anos bissextos.
        // Cálculo para ano bissexto:
        // Se ano / 100 resta 0 -> Então é bissexto se ano / 400 resta 0.
        // Se ano / 100 não resta 0 -> Então é bissexto se ano / 4 resta 0.

        $map = [];

        $anoAtual = (int) date('Y');

        for ($ano = $anoAtual; $ano <= $anoAtual + 10; $ano++) {

            // Verifica se o ano é bissexto
            $bissexto = $ano % 400 === 0 || ($ano % 4 === 0 && $ano % 100 !== 0);

            $meses = [];

            for ($mes = 0; $mes < 12; $mes++) {

                if ($mes === 1) {
                    $dias = $bissexto ? 29 : 28;
                } elseif ($mes < 7) {
                    $dias = ($mes % 2 === 0) ? 31 : 30;
                } else {
                    $dias = ($mes % 2 === 1) ? 31 : 30;
                }

                $meses[$mes] = range(1, $dias);
            }

            $map[$ano] = $meses;
        }

        return $map;
    }
}
