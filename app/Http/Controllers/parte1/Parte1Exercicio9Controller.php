<?php

namespace App\Http\Controllers\parte1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Parte1Exercicio9Controller extends Controller
{
    /*
        Rota: parte1/exercicio9
    */

    private $musicos;

    private $cancoes;

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //Considere o arquivo "lista-de-compras.txt" localizado em "storage".

        //Os produtos na "lista-de-compras.txt" estão separados por nome, quantidade e se você já possui em casa ou
        // não (S ou N).

        //Leia o arquivo e retorne uma lista (ORDENADA alfabeticamente por nome do produto) contendo apenas os
        // produtos marcados com N de "Não Possui".

        //Os produtos sem a descrição de "Já possui" (S ou N) devem ser considerados como N.

        $listaDeCompras = collect([]);

        return $listaDeCompras; 
    }
}
