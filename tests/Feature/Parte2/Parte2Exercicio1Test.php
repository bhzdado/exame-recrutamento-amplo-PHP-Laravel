<?php

namespace Tests\Feature\Parte2;

use App\Models\Pessoa;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Parte2Exercicio1Test extends TestCase
{
    use RefreshDatabase; 

    /** @test */
    public function CorrigeExercicio1Parte2()
    {
        $dados = [
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

        foreach ( $dados as $dadosPessoa ) {
            Pessoa::create([
                'nome' => $dadosPessoa[0],
                'idade' => $dadosPessoa[1],
                'dt_inclusao' => Carbon::createFromFormat('d/m/Y', $dadosPessoa[2])->format('Y-m-d'),
                'dt_exclusao' => $dadosPessoa[3] ? Carbon::createFromFormat('d/m/Y', $dadosPessoa[3])->format('Y-m-d') : null,
            ]);
        }

        $response = $this->getJson('parte2/exercicio1');

        $response->assertStatus(200);

        $resultado = array_column($response->json(), 'nome');
        $esperado = [
            'Alice', 'Alexandre', 'Juliana', 'Vicente', 'Bruno', 'Nelson', 
            'Gabi', 'João', 'Mário', 'Bruna'
        ];

        $this->assertEquals($esperado, $resultado);
    }
}