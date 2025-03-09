<?php

$caminho = __DIR__ . '/bancodedados/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminho);

// criar banco de dados de estudantes
try {
    $pdo->exec("
        CREATE TABLE estudantes 
            (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                nome TEXT,
                data_nascimento TEXT
            );
    ");
} catch (PDOException $e) {
    echo "Erro ao tentar criar: {$e->getMessage()}";
}
