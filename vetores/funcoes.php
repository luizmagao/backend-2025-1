<?php

function exibirMensagem($texto)
{
    echo mb_strtoupper($texto) . '<br/>';
}

function sacar(array &$conta, float $valor)
{
    if ($valor > $conta['saldo']) {
        exibirMensagem('Saldo insuficiente.');
        return false;
    } else {
        $conta['saldo'] -= $valor;
        exibirMensagem("Saque realizado com sucesso!");
        return true;
    }
}

function deposito(array &$conta, float $valor)
{
    $conta['saldo'] += $valor;
    exibirMensagem('Depósito realizado com sucesso!');
}

function transferir(array &$contaPrincipal, array &$contaRecebe, $valor)
{
    if (sacar($contaPrincipal, $valor)) {
        deposito($contaRecebe, $valor);
    } else {
        exibirMensagem('Não foi possivel fazer a transferência');
    }
}
