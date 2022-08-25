<?php

function calcular($valor1, $valor2, $op) {
    if ($op == 'SOM') {
        return $valor1 + $valor2;
    } elseif ($op == 'MUL') {
        return $valor1 * $valor2;
    } elseif ($op == 'DIV') {
        return $valor1 / $valor2;
    } elseif ($op == 'SUB') {
        return $valor1 - $valor2;
    } else {
        return "O OPERADOR NÃO FOI IMPLEMENTADO";
    }
}
?>