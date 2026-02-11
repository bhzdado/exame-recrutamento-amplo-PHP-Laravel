<?php

namespace App\Http\Controllers\parte1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Estudante
{
    private $matricula;
    private $nome;

    public function __construct(int $matricula, string $nome)
    {
        $this->matricula = $matricula;
        $this->nome = $nome;
    }

    public function getMatricula(): int
    {
        return $this->matricula;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    // Método para facilitar a conversão para JSON no Laravel
    public function toArray(): array
    {
        return ['matricula' => $this->matricula, 'nome' => $this->nome];
    }
}

class Parte1Exercicio6Controller extends Controller
{
    /*
        Rota: parte1/exercicio6
    */

    private $estudantes;

    public function __construct()
    {
        $this->estudantes = [
            new Estudante(7, "João"),
            new Estudante(3, "Gabi"),
            new Estudante(11, "Mário"),
            new Estudante(19, "Carlos"),
            new Estudante(2, "Alexandre"),
            new Estudante(8, "Bruna"),
        ];
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //Ordene em ordem crescente a lista estudantes acima por matrícula

        return $this->estudantes;
    }
}
