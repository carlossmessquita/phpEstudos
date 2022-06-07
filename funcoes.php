<?php

// Função sem parâmetro:
function funcaoSemParam()
{
    echo "Função sem parâmetro.".PHP_EOL;
}

// Função com parâmetro:
function funcaoComParam(string $parametro)
{
    echo "Função com parâmetro -> '$parametro'".PHP_EOL;
}

// Função com  mútiplos parâmetros:
function funcaoComDoisParam(int $par1, int $par2)
{
    echo ($par1 * $par2) . PHP_EOL;
}

// Função com retorno:
function funcaoComRetorno(int $par1, int $par2): int
{
    return $par1 + $par2;
}

funcaoSemParam();
funcaoComParam(2508);
funcaoComDoisParam(2, 8);
echo funcaoComRetorno(2, 4).PHP_EOL;

function testeString(string $nome): string
{
    return "Olá, {$nome}.";
}

$saudacao = testeString("Carlos");
echo "Resultado => {$saudacao}".PHP_EOL;
