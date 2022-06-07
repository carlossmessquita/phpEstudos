<?php

// Variáveis -> Tipos alteráveis ao longo do código, no php, utilizar -> $:
$nome = "Carlos";
$idade = 22;
$altura = 1.75;

// Operando com números (+, -, *, **, /, %):
$novaIdade = $idade + 10;

echo $novaIdade."\n";

// Tipos de dados -> Numéricos: Inteiros, Ponto Flutuante;


echo gettype($idade)."\n"; // int
echo gettype($altura)."\n"; // double

// Tipos de dados -> Boleanos: true/false;
$verdadeiro = true;
$falso = false;

// Tipos de dados -> Texto: String;
echo $nome."\n";

// Concatenar
echo 'Olá, '.$nome.PHP_EOL; // PHP_EOL = \n;
echo "Olá, '$nome', seja bem vindo!";
