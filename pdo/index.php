<?php

require_once __DIR__ . '/vendor/autoload.php';

use Luizmagao\PdoSqlite\Aplicacao\Estudante\MatricularEstudante\MatricularEstudante;
use Luizmagao\PdoSqlite\Aplicacao\Estudante\MatricularEstudante\MatricularEstudanteDTO;
use Luizmagao\PdoSqlite\Domain\Model\Estudante\Estudante;
use Luizmagao\PdoSqlite\Infra\Estudante\RepositorioEstudantePdo;


$caminho = __DIR__ . '/bancodedados/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminho);

$id = 1;
$nome = $argv[1];
$data_nascimento = $argv[2];

$estudante = new MatricularEstudanteDTO($id, $nome, $data_nascimento);

$repositorio = new RepositorioEstudantePdo($pdo);
$casoDeUso = new MatricularEstudante($repositorio);
$casoDeUso->executa($estudante);
