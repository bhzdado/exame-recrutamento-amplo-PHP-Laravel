<?php

namespace App\Http\Controllers\parte2;

use App\Http\Controllers\Controller;
use App\Models\Pessoa;
use Exception;
use Illuminate\Http\Request;

class Parte2Exercicio2Controller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //Modifique esta classe ( Exercicio_2 ) para que ela seja um controller e possua um endpoint get que retorne
        // uma lista de pessoas.
        // Considere as regras abaixo:

        // A query deve ordenar por idade crescente e nome alfabeticamente.
        // A query deve recuperar apenas as pessoas com idade par.

        try {
            $pessoas = Pessoa::query()
                ->whereRaw('idade % 2 = 0')
                ->orderBy('idade', 'asc')
                ->orderBy('nome', 'asc')
                ->get();
        } catch (Exception $e) {
            return response()->json([
                'mensagem' => 'Erro ao realizar a busca: ' . $e->getMessage(),
            ], 400);
        }

        if ($pessoas->isEmpty()) {
            return response()->json([
                'mensagem' => 'Nenhuma pessoa encontrada.',
            ], 404);
        }

        return response()->json([
            'mensagem' => 'Busca realizada com sucesso.',
            'dados' => $pessoas
        ], 200);
    }
}
