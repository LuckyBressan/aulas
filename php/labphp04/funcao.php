<?php
include 'biblioteca.php';

$valor1 = $_GET['v1'];
$valor2 = $_GET['v2'];
$op = $_GET['op'];

$resultado = calcular ($valor1, $valor2, $op);

echo "A operação era ".$_GET['op']."<br>";
echo "O resultado foi ".$resultado;
?>