<?php

namespace App\Http\Controllers\parte2;

use App\Http\Controllers\Controller;
use App\Models\Pessoa;
use Exception;
use Illuminate\Http\Request;

class Parte2Exercicio1Controller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Utilizando o Model Pessoa, faça uma busca no banco já em memoria e retorne o nome de todas as pessoas.
        // Considere as regras abaixo:
        //
        //Ordene por idade crescente e nome alfabeticamente.

        try {
            $pessoas = Pessoa::query()
                ->orderBy('idade', 'asc')
                ->orderBy('nome', 'asc')
                ->get(['nome']);
        } catch (Exception $e) {
            return response()->json([
                'mensagem' => 'Erro ao realizar a busca: ' . $e->getMessage(),
            ], 400);
        }

        if ($pessoas->isEmpty()) {
            return response()->json([
                'mensagem' => 'Nenhuma pessoa encontrada.'
            ], 404);
        }

        return response()->json([
            'mensagem' => 'Busca realizada com sucesso.',
            'dados' => $pessoas,
        ], 200);
    }
}
