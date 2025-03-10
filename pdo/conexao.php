<?php

$caminho = __DIR__ . '/bancodedados/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminho);

// criar banco de dados de estudantes
// try {
//     $pdo->exec("
//         CREATE TABLE estudantes 
//             (
//                 id INTEGER PRIMARY KEY AUTOINCREMENT,
//                 nome TEXT,
//                 data_nascimento TEXT
//             );
//     ");
// } catch (PDOException $e) {
//     echo "Erro ao tentar criar: {$e->getMessage()}" . PHP_EOL;
// }

// Inserir estudantes na entidade
try {
    $sqlInserir = "
        INSERT INTO estudantes 
        (id, nome, data_nascimento)
        VALUES
        (?, ?, ?);
    ";
    $statement = $pdo->prepare($sqlInserir);
    $statement->bindValue(2, 'Sílvio');
    $statement->bindValue(3, '2025-01-01');
    if ($statement->execute()) {
        echo "Estudante inserido." . PHP_EOL;
    }
} catch (PDOException $e) {
    echo "Erro ao tentar inserir dados: {$e->getMessage()}" . PHP_EOL;
}

// listar estudantes
// $resultado = $pdo->query('SELECT * FROM estudantes WHERE id = 1;');

// while ($dadosEstudante = $resultado->fetch(PDO::FETCH_ASSOC)) {
//     echo $dadosEstudante["data_nascimento"] . PHP_EOL;
// }
