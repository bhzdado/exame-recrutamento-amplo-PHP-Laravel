<?php

namespace App\Http\Controllers\parte1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Parte1Exercicio2Controller extends Controller
{
    /*
    Rota: parte1/exercicio2
*/

    private $idade = [20, 21, 18, 35, 28, 26, 26, 25, 19, 20, 20, 30, 31, 39];
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //Escreva abaixo um código que armazene as idades ordenadas crescentemente da lista acima no array (idadesArray) abaixo:
        $idadesArray = [];

        $idadesArray = $this->idade;
        sort($idadesArray);

        return $idadesArray;
    }
}
