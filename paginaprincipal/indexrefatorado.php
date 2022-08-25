<?php 
    session_start();

    if (isset($_GET['logout'])) {
        session_destroy();
        header("Location: /lucas/indexrefatorado.php?");
    }
    if (isset($_POST['entrar'])) {
        if ($_POST['email'] == 'lucas.bressan@unidavi.edu.br' && $_POST['senha'] == 'laricas') {
            $_SESSION['logado'] = true;
        } else {
            echo 'ALERTA! ALERTA! USUÁRIO NÃO IDENTIFICADO';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexrefatorado.css">
    <link rel="stylesheet" href="normalize.css">
    <title>Aula Web 1</title>
</head>
<body>
    <header id="cabeca">
        <h2>Aulas WEB - DEV TI</h2>
    </header>

    <section>
        <nav id="menu" >
            <?php include "menu.php";?>
        </nav>
        <article id="corpo" >
            <?php 
                if(isset($_GET["pagina"])) {
                    if(file_exists($_GET["pagina"].".php")){
                        if (isset($_SESSION['logado'])) {
                            include $_GET['pagina'].".php";
                        } else {
                            include "login.php";
                        }
                    } else {
                        include "404.php";
                    }
                } else{
                    include "corpo.php";
                }
            ?>
        </article>
    </section>
    
    <footer id="final">
        <p>@2022 - Curso Dev TI</p>
    </footer>
</body>
</html>