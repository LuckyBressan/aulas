<?php 
    /* PHP 12
    $lista = fopen("lista.txt","w") or die("Arquivo não corresponde");
    $texto = "Manteiga\r\n";
    fwrite($lista, $texto);
    $texto = "Macarrão\r\n";
    fwrite($lista, $texto);
    */
    
    //PHP 11
    $lista = fopen("lista.txt","r") or die("Arquivo não corresponde");
    while (!feof($lista)) {
        echo fgets($lista)."<br>";
    }

    //PHP 13 
    /*
    $produtos = file_get_contents("lista.txt");
    $linha = explode("\r\n",$produtos);
    unset($linha[$_GET['li']]);
    $nova_compra = implode("\r\n",$linha);

    $lista = fopen("lista.txt","w+") or die("Arquivo não corresponde");
    fwrite($lista, $nova_compra);
    */
    //PHP 14
    $produtos = file_get_contents("lista.txt");
    $linha = explode("\r\n",$produtos);
    $linha[$_GET['li']] = $_GET['nova'];
    $nova_compra = implode("\r\n",$linha);

    $lista = fopen("lista.txt","w+") or die("Arquivo não corresponde");
    fwrite($lista, $nova_compra);  
?>