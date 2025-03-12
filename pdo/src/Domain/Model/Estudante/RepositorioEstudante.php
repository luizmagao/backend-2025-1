<?php

namespace Luizmagao\PdoSqlite\Domain\Model\Estudante;

interface RepositorioEstudante
{
    public function adicionar(Estudante $estudante): Estudante;
    public function buscarTodos(): array;

    public function removerEstudante(Estudante $aluno): Estudante;
}
