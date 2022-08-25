<?php 
    session_start();

    include "conn/conexao.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Northwind</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <?php
            include "menu.php";

            if (isset($_GET['pagina']) & $_GET['pagina'] == 'listagem') {
                include "lista.php";
            }
            if (isset($_GET['pagina']) & $_GET['pagina'] == 'cadastro') {
                include "cadastro.php";
            }
            if (isset($_GET['pagina']) & $_GET['pagina'] == 'home') {
                include "home.php";
            }
            if (isset($_GET['pagina']) & $_GET['pagina'] == 'f_deletar') {
                include "fornecedor/deleta_fornecedor.php";
            }
            if (isset($_GET['pagina']) & $_GET['pagina'] == 'f_atualizar') {
                include "fornecedor/atualiza_fornecedor.php";
            }
            if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_deletar') {
                include "produtos/deletar.php";
            }
            if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_atualizar') {
                include "produtos/atualizar.php";
            }
            if (isset($_GET['pagina']) & $_GET['pagina'] == 'c_deletar') {
                include "cliente/deleta.php";
            }
            if (isset($_GET['pagina']) & $_GET['pagina'] == 'c_atualizar') {
                include "cliente/atualiza.php";
            }
            if (isset($_GET['pagina']) & $_GET['pagina'] == 'fun_deletar') {
                include "funcionario/deleta.php";
            }
            if (isset($_GET['pagina']) & $_GET['pagina'] == 'fun_atualizar') {
                include "funcionario/atualiza.php";
            }
        ?>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>