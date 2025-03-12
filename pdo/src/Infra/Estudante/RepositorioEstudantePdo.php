<?php

namespace Luizmagao\PdoSqlite\Infra\Estudante;

use Luizmagao\PdoSqlite\Domain\Model\Estudante;
use Luizmagao\PdoSqlite\Domain\Model\RepositorioEstudante;

class RepositorioEstudantePdo implements RepositorioEstudante
{
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
