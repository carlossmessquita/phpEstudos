<?php

// Arrays no PHP:
$arrayA = array(10, 20, 30);
$arrayB = [40, 50, 60];

//echo $arrayA[0].PHP_EOL;
//echo $arrayB[0].PHP_EOL;

for($i = 0; $i < count($arrayA); $i++) {
    echo $arrayA[$i].PHP_EOL;
}

for($i = 0; $i < count($arrayB); $i++) {
    echo $arrayB[$i].PHP_EOL;
}

// Array Associativo -> Similar ao Dicionário Python:
$arrAssociativo1 = [
    'nome' => 'Carlos',
    'idade' => 22
];
$arrAssociativo2 = [
    'nome' => 'Vitor',
    'idade' => 22
];
$arrAssociativo3 = [
    'nome' => 'Silva',
    'idade' => 22
];

echo $arrAssociativo1['nome'].PHP_EOL;
echo $arrAssociativo2['idade'].PHP_EOL;

// Array de Arrays:
$matriz = [$arrAssociativo1, $arrAssociativo2, $arrAssociativo3];

echo $matriz[0]['nome'].PHP_EOL;
echo $matriz[0]['idade'].PHP_EOL;

// Foreach
foreach($matriz as $mat) {
    echo $mat['nome'].PHP_EOL;
}

// Add. itens ao array:
$arrayA[] = 0;
$arrayB[] = 0;

foreach($arrayA as $arr) {
    echo $arr.PHP_EOL;
}

// List:
$lista = [21, 22, 23, 24];

list($idadeCarlos, $idadeVitor, $idadePedro, $idadeJoao) = $lista;

echo $idadeCarlos.PHP_EOL;

[$idadeMaria, $idadeSara, $idadeVini, $idadePaulo] = $lista;

echo $idadeMaria.PHP_EOL;

// Remover itens:
unset($lista[3]);

echo $lista[3];

$lista[3] = 28;
echo $lista[3];