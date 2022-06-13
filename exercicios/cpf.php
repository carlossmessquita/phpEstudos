<?php

$cpf = "073282693";
$m = 11;
$soma = 0;

for($i = 0; $i < strlen($cpf); $i++) {
    $m--;
    $cont = (((int) $cpf[$i]) * ($m));
    $soma += $cont;
    $resto = ($soma * 10) % 11;

}
echo  $resto.PHP_EOL;

$m = 12;
$soma = 0;
$d2 = $resto;

for($i = 0; $i < strlen($cpf); $i++) {
    $m--;
    $cont = (((int) $cpf[$i]) * ($m));
    $soma += $cont;
    $resto = ((($d2 * 2) + $soma) * 10 ) % 11;
}

echo  $resto.PHP_EOL;

