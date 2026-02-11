<?php

namespace App\Http\Controllers\parte1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Parte1Exercicio3Controller extends Controller
{
        /*
        Rota: parte1/exercicio3
    */

    private $numerosAleatorios = [-1, 0, 99, 8, 6, 5, 7, 8, 458, 602, 1, 4, 7, 8, 9, 6, 3, 21, 603, 878, 6, -32123, -54, -987, -8];
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //Escreva abaixo um código que recupere o maior número existente no array numerosAleatorios acima

        $maiorNumero = 0;

        foreach ($this->numerosAleatorios as $numero) {
            if ($numero > $maiorNumero) {
                $maiorNumero = $numero;
            }
        }

		return $maiorNumero;
    }
}
