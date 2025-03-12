<?php

namespace Luizmagao\PdoSqlite\Infra\Estudante;

use Luizmagao\PdoSqlite\Domain\Model\Estudante;
use Luizmagao\PdoSqlite\Domain\Model\RepositorioEstudante;
use PDO;

class RepositorioEstudantePdo implements RepositorioEstudante
{
    private PDO $conexao;

    function __construct(PDO $conexao)
    {
        $this->conexao = $conexao;
    }

    public function adicionar(Estudante $estudante): Estudante
    {
        return new Estudante('', '', '');
    }

    function buscarTodos(): array
    {
        return [];
    }

    function removerEstudante(Estudante $aluno): Estudante
    {
        return new Estudante('', '', '');
    }
}
