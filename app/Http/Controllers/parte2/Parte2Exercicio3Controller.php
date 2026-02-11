<?php

namespace App\Http\Controllers\parte2;

use App\Http\Controllers\Controller;
use App\Models\Pessoa;
use Exception;
use Illuminate\Http\Request;

class Parte2Exercicio3Controller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $data)
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

        // dd-MM-yyyy -> Y-m-d
        $dataArray = explode('-', $data);
        $data = "{$dataArray[2]}-{$dataArray[1]}-{$dataArray[0]}";

        try {
            $pessoas = Pessoa::query()
                ->where('dt_inclusao', '<=', $data)
                ->where(function ($query) use ($data) {
                    $query->whereNull('dt_exclusao')
                        ->orWhere('dt_exclusao', '>=', $data);
                })
                ->orderBy('nome', 'asc')
                ->orderBy('idade', 'asc')
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
