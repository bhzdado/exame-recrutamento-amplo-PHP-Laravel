<?php

namespace App\Http\Controllers\parte1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Parte1Exercicio4Controller extends Controller
{
    /*
        Rota: parte1/exercicio4
    */
    private $megasena;

    public function __construct()
    {
        // O Laravel permite lógica aqui
        $this->megasena = collect([6, 15, 20, 54, 45, 60]);
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //Escreva abaixo um código, utilizando a collect filter, para filtrar os números
        // ímpares da lista megasena e armazene-os no array arrayImpares abaixo.

        $arrayImpares = [];

        return $arrayImpares;
    }
}
