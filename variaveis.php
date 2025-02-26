<?php

$idade = 18;

echo "Você só pode entrar se tiver mais de 18 anos." . PHP_EOL;

if (($idade >= 18)) {
    echo "Pode entrar." . PHP_EOL;
} else {
    echo "Você não pode entrar, precisa de um responsável." . PHP_EOL;
}



echo "Sua idade é: $idade" . PHP_EOL;
