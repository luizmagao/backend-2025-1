<?php

namespace Luizmagao\PdoSqlite\Aplicacao\Estudante\MatricularEstudante;

use Luizmagao\PdoSqlite\Domain\Model\Estudante\Estudante;
use Luizmagao\PdoSqlite\Domain\Model\Estudante\RepositorioEstudante;
use Luizmagao\PdoSqlite\Infra\Estudante\RepositorioEstudantePdo;
use PDO;

class MatricularEstudante
{
    private RepositorioEstudante $repositorio;

    public function __construct(RepositorioEstudante $repositorio)
    {
        $this->repositorio = $repositorio;
    }

    public function executa(MatricularEstudanteDTO $dados)
    {
        $estudante = new Estudante($dados->id, $dados->nomeCompleto, $dados->dataNascimento);
        $this->repositorio->adicionar($estudante);
    }
}
