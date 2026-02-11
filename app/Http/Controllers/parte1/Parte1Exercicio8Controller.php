<?php

namespace App\Http\Controllers\parte1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Parte1Exercicio8Controller extends Controller
{
    /*
        Rota: parte1/exercicio8
    */

    private $musicos;

    private $cancoes;

    public function __construct()
    {
        $this->musicos = collect([
            "Djavan",
            "Elis Regina",
            "Tim Maia",
            "Antonio Carlos Jobim"
        ]);

        $this->cancoes = [
            ["Oceano", "Nem um Dia", "Um Amor Puro"],
            ["Alô, alô marciano", "Como Nossos Pais", "O Bêbado e a Equilibrista"],
            ["Ela Partiu", "O Descobridor Dos Sete Mares", "Gostava Tanto de Você", "Não Quero Dinheiro"],
            ["Wave", "Garota de Ipanema", "Chega de Saudade"]
        ];
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //Junte o array musicos e a matriz canções em um único Map<String,List<String>> contendo o músico como chave e
		// suas respectivas canções em ORDEM ALFABÉTICA.

        $map = [];

        
        return $map;
    }
}
