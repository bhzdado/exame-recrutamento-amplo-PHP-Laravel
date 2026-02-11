<?php

namespace App\Http\Controllers\parte2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Parte2Exercicio3Controller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Modifique esta classe ( Exercicio_3 ) para que ela seja um controller e possua um endpoint get 
        // que receba uma data com o formato dd-MM-yyyy  como parâmetro e retorne
        // a lista de pessoas ativas na data informada.    	
        // Ex: /pessoa-por-periodo/29-09-2022

        // Considere as regras abaixo:

        // A query deve ordenar por nome alfabeticamente e idade crescente.

        // Considerando como parâmetro de filtro o periodo de inclusão/exclusão, a query deve
        // recuperar as pessoas que fazem parte desse período de filtro.
        //  Ex: "João" - 19-09-2021 - 19-09-2023 estaria ATIVO na data 29-09-2022 e INATIVO na data 19-09-2019.

    }
}
