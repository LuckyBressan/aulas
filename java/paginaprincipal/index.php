<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Index Java</title>
</head>
<body>
    <header id="cabeca"><h2>AULAS JS - DEV TI</h2></header>

    <section>
        <nav id="menu">
            <?php include "menu.php" ?>
        </nav>
        <article id="corpo">
            <?php 
                if(isset($_GET["pagina"])) {
                    if(file_exists($_GET["pagina"].".php")){
                        include $_GET['pagina'].".php";
                    } else {
                        include "404.php";
                    }
                } else{
                    include "corpo.php";
                }
            ?>
        </article>

        <footer id="final">
            <p>@2022 - Curso Dev TI</p>
        </footer>
    </section>

</body>
</html>