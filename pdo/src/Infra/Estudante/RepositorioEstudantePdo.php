<?php

namespace Luizmagao\PdoSqlite\Infra\Estudante;

use Luizmagao\PdoSqlite\Domain\Model\Estudante\Estudante;
use Luizmagao\PdoSqlite\Domain\Model\Estudante\RepositorioEstudante;
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
        $sql = "INSERT INTO estudantes (nome, data_nascimento) VALUES (:nome, :data_nascimento);";
        $statements = $this->conexao->prepare($sql);
        $statements->bindValue('nome', $estudante->nome());
        $statements->bindValue('data_nascimento', $estudante->dataNascimento());
        $statements->execute();

        $sql = "SELECT * FROM estudantes ORDER BY id DESC LIMIT 1;";
        $statements = $this->conexao->query($sql);
        $estudante = $statements->fetch(PDO::FETCH_ASSOC);
        return new Estudante(
            $estudante['id'],
            $estudante['nome'],
            $estudante['data_nascimento']
        );
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
