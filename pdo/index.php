<?php

require_once __DIR__ . '/vendor/autoload.php';

use Luizmagao\PdoSqlite\Domain\Model\Estudante\Estudante;
use Luizmagao\PdoSqlite\Infra\Estudante\RepositorioEstudantePdo;


$caminho = __DIR__ . '/bancodedados/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminho);

$estudante = new Estudante(3, 'Laura Lívia', '2025-10-11');
$repositorio = new RepositorioEstudantePdo($pdo);
$estudanteSalvo = $repositorio->adicionar($estudante);

var_dump($estudanteSalvo);
