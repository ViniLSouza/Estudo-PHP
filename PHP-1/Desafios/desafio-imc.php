<?php

$peso = 90;
$altura = 1.82;
$imcConta = $peso / $altura ** 2;
$imc = number_format($imcConta, 2, '.', '');;

if ($imc >= 18.5 && $imc <= 24.9) {
    echo "Parabéns! seu IMC de $imc está na média.";
} else if ($imc < 18.5) {
    echo "Seu IMC de $imc está abaixo do recomendado!";
} else if ($imc > 24.9) {
    echo "Seu IMC de $imc está maior do que o recomendado!";
}