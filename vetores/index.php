<?php

require 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Luiz Lins',
        'saldo' => 1000
    ],
    '019.876.543-21' => [
        'titular' => 'Nikey',
        'saldo' => 5000
    ],
    '247.878.765-54' => [
        'titular' => 'Carlos',
        'saldo' => 7500
    ]
];

try {
    sacar(
        $contasCorrentes['123.456.789-10'],
        10
    );
} catch (Error | Exception $e) {
    exibirMensagem('Algo errado com os parametros.');
}

foreach ($contasCorrentes as $chave => $conta) {
    exibirMensagem("CPF: $chave, Titular: $conta[titular], Saldo: $conta[saldo]");
}
