<?php

require_once __DIR__ . '/vendor/autoload.php';

use Luizmagao\PdoSqlite\Domain\Model\Estudante\Estudante;
use Luizmagao\PdoSqlite\Infra\Estudante\RepositorioEstudantePdo;


$caminho = __DIR__ . '/bancodedados/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminho);

$id = rand(10, 9999999);
$nome = $argv[1];
$data_nascimento = $argv[2];

$estudante = new Estudante($id, $nome, $data_nascimento);
$repositorio = new RepositorioEstudantePdo($pdo);
$estudanteSalvo = $repositorio->adicionar($estudante);

var_dump($estudanteSalvo);
