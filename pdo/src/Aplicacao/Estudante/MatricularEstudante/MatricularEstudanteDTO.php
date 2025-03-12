<?php

namespace Luizmagao\PdoSqlite\Aplicacao\Estudante\MatricularEstudante;

class MatricularEstudanteDTO
{
    public int $id;
    public string $nomeCompleto;
    public string $dataNascimento;

    public function __construct(int $id, string $nomeCompleto, string $dataNascimento)
    {
        $this->id = $id;
        $this->nomeCompleto = $nomeCompleto;
        $this->dataNascimento = $dataNascimento;
    }
}
