<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Request;

class GridTabelaController extends Controller
{
    public function __invoke(Request $request)
    {
        $pessoas =  [
            ['João', 28, '19/09/2021', '19/09/2023'],
            ['Gabi', 27, '05/06/2023', '18/04/2028'],
            ['Alice', 9, '02/07/2021', '11/12/2022'],
            ['Alexandre', 19, '19/09/2021', null],
            ['Mário', 32, '15/02/2021', '27/10/2023'],
            ['Bruna', 38, '19/09/2021', null],
            ['Juliana', 23, '16/05/2021', '25/12/2023'],
            ['Nelson', 25, '09/09/2021', '12/07/2022'],
            ['Vicente', 23, '01/01/2024', null],
            ['Bruno', 25, '10/01/2021', '31/12/2022'],
        ];

        return view('pessoas.index', compact('pessoas'));
    }
}