<?php
function validar_campos() {
    $nome = $_POST['nome'];
    $salario = $_POST['salario'];
    $endereco = $_POST['endereco'];
    $valida = true;
    if(empty($nome)) {
        $valida = false;
        echo "Nome é Obrigatório";
        return ($valida);
    }
}