<?php

use Domain\Model\Estudante;

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
// try {
//     $sqlInserir = "
//         INSERT INTO estudantes 
//         (id, nome, data_nascimento)
//         VALUES
//         (:id, :nome, :data_nascimento);
//     ";
//     $statement = $pdo->prepare($sqlInserir);
//     $statement->bindValue(':nome', 'Antonio Valdico');
//     $statement->bindValue(':data_nascimento', '2024-06-30');
//     if ($statement->execute()) {
//         echo "Estudante inserido." . PHP_EOL;
//     }
// } catch (PDOException $e) {
//     echo "Erro ao tentar inserir dados: {$e->getMessage()}" . PHP_EOL;
// }

// listar estudantes
$resultado = $pdo->query('SELECT * FROM estudantes;');

$listaDadosEstudantes = $resultado->fetchAll(PDO::FETCH_ASSOC);

$listaEstudantes = [];

foreach ($listaDadosEstudantes as $dadoEstudante) {
    $listaEstudantes[] = new Estudante(
        $dadoEstudante['id'],
        $dadoEstudante['nome'],
        $dadoEstudante['data_nascimento'],
    );
}

var_dump($listaEstudantes);

// while ($dadosEstudante = $resultado->fetch(PDO::FETCH_ASSOC)) {
//     echo $dadosEstudante["data_nascimento"] . PHP_EOL;
// }
