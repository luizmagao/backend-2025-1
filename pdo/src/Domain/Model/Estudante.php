<?php

namespace Luizmagao\PdoSqlite\Domain\Model;

use DateTimeImmutable;

class Estudante
{

    private ?int $id;
    private string $nome;
    private DateTimeImmutable $data_nascimento;

    public function __construct(?int $id, string $nome, DateTimeImmutable $data_nascimento)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->data_nascimento = $data_nascimento;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    function nome(): string
    {
        return $this->nome;
    }

    function dataNascimento(): DateTimeImmutable
    {
        return $this->data_nascimento;
    }
}
