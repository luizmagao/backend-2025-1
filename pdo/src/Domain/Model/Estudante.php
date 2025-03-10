<?php

namespace Domain\Model;

class Estudante
{

    private ?int $id;
    private string $nome;
    private string $data_nascimento;

    // public function __construct(?int $id, string $nome, string $data_nascimento)
    // {
    //     $this->id = $id;
    //     $this->nome = $nome;
    //     $this->data_nascimento = $data_nascimento;
    // }

    public function id(): ?int
    {
        return $this->id;
    }

    function nome(): string
    {
        return $this->nome;
    }

    function dataNascimento(): string
    {
        return $this->data_nascimento;
    }

    function idade(): int
    {
        return 39;
    }
}
