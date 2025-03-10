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
        (NULL, 'Luiz Lins', '1985-10-27'),
        (NULL, 'Maria', ''); DROP TABLE estudantes; -- Ires', '1954-07-12'),
        (NULL, 'Iluise Miranda', '1987-08-17'),
        (NULL, 'João Abílio', '1983-10-02');
    ";
    echo $pdo->exec($sqlInserir) . PHP_EOL;
} catch (PDOException $e) {
    echo "Erro ao tentar inserir dados: {$e->getMessage()}" . PHP_EOL;
}

// listar estudantes
// $resultado = $pdo->query('SELECT * FROM estudantes WHERE id = 1;');

// while ($dadosEstudante = $resultado->fetch(PDO::FETCH_ASSOC)) {
//     echo $dadosEstudante["data_nascimento"] . PHP_EOL;
// }
