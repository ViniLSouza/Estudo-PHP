<?php

$contasCorrentes = [
    '123.456.789-10' =>  [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    '123.456.788-10' => [
        'titular' => 'Maria',
        'saldo' => 12000
    ], 
    '123.456.787-10' => [
        'titular' => 'John',
        'saldo' => 300
    ],
];

$contasCorrentes ['123.456.786-10'] = [
    'titular' => 'Claudia',
    'saldo' => 3500
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}