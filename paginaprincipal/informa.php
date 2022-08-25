<?php
    echo "O nome do cliente é: {$_POST['nome']}<br>";
    echo "O CPF do cliente é: {$_POST['cpf']}<br>";
    echo "A data de nascimento do cliente é: {$_POST['nascimento']}<br>";
    echo "O sexo do cliente é: {$_POST['sexo']}<br>";
    echo "O telefone do cliente é: {$_POST['telefone']}<br>";
    echo "O email do cliente é: {$_POST['email']}<br>";
    echo "O estado do cliente é: {$_POST['estado']}<br>";
    echo "A cidade do cliente é: {$_POST['cidade']}<br>";
    echo "A cor escolhida foi: ".var_dump($_POST['cor'])."<br>";
    echo "A marca esolhida foi: ".var_dump($_POST['cor'])."<br>";
?>