<?php

    // Função sem parâmetro:
    function funcaoSemParam() {
        echo "Função sem parâmetro.".PHP_EOL;
    }

    // Função com parâmetro:
    function funcaoComParam($parametro) {
        echo "Função com parâmetro -> '$parametro'".PHP_EOL;
    }

    // Função com  mútiplos parâmetros:
    function funcaoComDoisParam($par1, $par2) {
        echo ($par1 * $par2) . PHP_EOL;
    }

    // Função com retorno:
    function funcaoComRetorno($par1, $par2) {
        return $par1 + $par2;
    }

    funcaoSemParam();
    funcaoComParam(2508);
    funcaoComDoisParam(2, 8);
    echo funcaoComRetorno(2, 4);

