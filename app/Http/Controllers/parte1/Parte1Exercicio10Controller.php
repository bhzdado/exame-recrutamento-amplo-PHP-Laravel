<?php

namespace App\Http\Controllers\parte1;

use App\Http\Controllers\Controller;
use File;
use Illuminate\Http\Request;

class Parte1Exercicio10Controller extends Controller
{
    /*
        Rota: parte1/exercicio10
    */

    private $basePath;

    private $numerosDaSorte ;

    public function __construct(){
        $this->basePath = storage_path("numeros-da-sorte.txt");
        $this->numerosDaSorte = [16.1, 4.9, 9.5, 3.4, 37.3, 22.7, 53.7, 13.6, 30.2, 21.3, 27.9, 8.5];
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //Utilizando o caminho acima 'basePath', escreva os números da sorte 'numerosDaSorte' acima no arquivo 'numeros-da-sorte.txt' localizado em 'src/main/resources/file'.

        //Os números devem estar ordenados decrescentemente e arredondados de acordo com as seguintes regras:

        // Para partes decimais menores que 0.5, arredondar o número para cima. Ex: 16.1 -> 17.0
        // Para partes decimais maiores que 0.5, arredondar o número para baixo. Ex: 16.1 -> 16.0
        //Para partes decimais iguais a 0.5, não arredondar
        //Os números gravados no arquivo devem seguir o padrão: 'numero original' => 'numero arredondado'
        //A cada número gravado deve ser criada uma nova linha

        $numerosArredondados = [];

        foreach ($this->numerosDaSorte as $numero) {
            $parteDecimal = $numero - floor($numero);
            if ($parteDecimal < 0.5) {
                $arredondado = ceil($numero);
            } elseif ($parteDecimal > 0.5) {
                $arredondado = floor($numero);
            } else {
                $arredondado = $numero;
            }
            $numerosArredondados[] = "$numero => $arredondado";
        }

        File::put($this->basePath, implode(PHP_EOL, $numerosArredondados));

        return response("Arquivo gerado com sucesso.");
    }
}
