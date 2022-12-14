<?php 
    session_start();

    include "lib/conexao.php";
    include "lib/autenticar.php";
    
    
    if(isset($_GET['pagina']) && $_GET['pagina']=='logout') {
        session_destroy();
        session_start();
    }

    
   
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Commerce</title>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <div class="container-fluid">
        <img src="img/unidavi.jpg" class="img-fluid"  alt="...">
        <?php 
        include "menu.php";
        echo "<div id='menu'>";
            include "menuVertical.php";
        echo "</div>";
        if(isset($_POST['add_carrinho'])) {
            $_SESSION['carrinho'][] = $_GET['id'];
        }
        
        if(isset($_POST['remover_carrinho'])) {
            unset($_SESSION['carrinho'][$_POST['produto']]);
        }
        if(isset($_POST['del_carrinho'])) {
            unset($_SESSION['carrinho']);
        }
        
        echo "<div id='corpo'>";
            if(isset($_GET['pagina'])) {
                $sql = "SELECT * from paginas where url = :url";
                $paginas = $conn->prepare($sql);
                $paginas->execute(array('url'=>$_GET['pagina']));
                $linha = $paginas->fetch();
                if(!empty($linha['url'])) {
                    if($linha['url']=='realizar_pedido') {
                        if(!isset($_SESSION['logado'])) {
                            include 'login.php';
                        } else {
                            require_once $linha['url'].'.php';
                        }
                        
                    } else if($linha['url']=='logout') {
                        include 'home.php';
                    } else if($linha['url']=='login' & isset($_SESSION['logado'])){
                        include 'informacoes_login.php';
                    } else {
                        require_once $linha['url'].'.php';
                    }
                    
                } else {
                    include '404.php';
                }
            } else {
                include 'home.php';
            }
        echo "</div>";
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>