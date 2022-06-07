<?php

$idade = 15;
// Condicional (if... else if... else...)
if ($idade >= 18) {
    echo "Adulto!".PHP_EOL;
} else if ($idade >= 14 and $idade < 18) {
    echo "Adolescente!".PHP_EOL;
} else {
    echo "Criança!".PHP_EOL;
}

// Ternário
$msg = $idade >= 18 ? "Maior de idade" : "Menor de idade";

echo $msg.PHP_EOL;

// Repetição

$contador = 0;

while ($contador < 10) {
    echo $contador.PHP_EOL;
    $contador += 1;
}

for($i = 0; $i < 10; $i++) {
    if (($i % 2) == 0) {
        echo "FIZZ".PHP_EOL;
    } else if (($i % 2) == 1) {
        echo "BUZZ".PHP_EOL;
    }

}