<?php 



function calcular($val1, $val2, $op = 'SOM') {
    //PRIMEIRA OPÇÃO - BLOCO DE VÁRIAS AÇÕES
    if ($op == 'SOM') {
        return $val1 + $val2;
    }
    if ($op == 'MUL') {
        return $val1 * $val2;
    }
    if ($op == 'DIV') {
        return $val1 / $val2;
    }
    if ($op == 'SUB') {
        return $val1 - $val2;
    }
    
    
    //SEGUNDA OPÇÃO - AÇÕES ÚNICAS
    return ($op == 'SOM')?$val1+$val2:'';
    return ($op == 'MUL')?$val1*$val2:'';
    return ($op == 'DIV')?$val1/$val2:'';
    return ($op == 'SUB')?$val1-$val2:'';
}

?>