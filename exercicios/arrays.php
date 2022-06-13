.<?php
    $arr = [7.5, 5.5, 6.0, 8.5, 10.0];
    $arrOrder = $arr;

    // Ordenar array -> sort() => função que espera uma referencia;
    sort($arrOrder);

    // Exibir elementos do Array;
    //var_dump($arr);
    //var_dump($arrOrder);

    // Ordenar com critério -> usort();
    /**
     * Recebe dois parâmetros já existentes no array,
     *
     */


    $mat = [
        ['Aluno' => 'Maria',
        'Nota' => 10],
        ['Aluno' => 'Carlos',
        'Nota' => 9.5],
        ['Aluno' => 'Vitor',
        'Nota' => 7.5]
    ];

    function ordenaNotas(array $nota1, array $nota2):int {
        /**
         * if ($nota1['Nota'] > $nota2['Nota'])
        {
            return -1;
        } else if ($nota1['Nota'] < $nota2['Nota'])
        {
            return 1;
        }
        return 0;

        Todsa essa comparação pode ser reduzida a:
        */

        return $nota2['Nota'] <=> $nota1['Nota'];
    }

    // Em usort() foi recebida uma função callback que retorna um valor entre -1 e 1;
    usort($mat, 'ordenaNotas');
    var_dump($mat);

    /**
     *Outros sorts:

     usort()
     rsort()
     asort()
     ksort()
     arsort()
     krsort()
     uksort()
     *
     */