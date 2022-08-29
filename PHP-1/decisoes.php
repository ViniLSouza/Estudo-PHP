<?php

$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho!";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, está acompanhado, então pode entrar!";
} else {
    echo "Você só tem $idade anos, portanto, não pode entrar.";
}

echo PHP_EOL;
echo "Adeus!";