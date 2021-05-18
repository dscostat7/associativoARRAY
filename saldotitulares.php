<?php

require_once '/src/ActionsBank/ArrayUtils.php';


$correntistas = ["Giovani", "João", "Maria", "Luis", "Luisa", "Rafael"];

$saldos = [2500, 3000, 4400, 1000, 8700, 9000];

$relacionados = array_merge($correntistas, $saldos); //transformando os 2 arrays em 1;

$relacionaCorr = array_combine($correntistas, $saldos); //array assiciativo -> o nome da chamada são os dados do primeiro array, e o valor os dados do segundo array;

foreach ($relacionaCorr as $titularComSaldo) {
    echo "<p>$titularComSaldo</p>";
}

echo "O saldo do Giovani é {$relacionaCorr["Giovani"]}";

$salarioMaior = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionaCorr);
var_dump($salarioMaior);