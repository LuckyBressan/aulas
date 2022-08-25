<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="normalize.css">
    <title>Aula Web 1</title>
</head>
<body>
    <div id="cabeca">Aulas WEB - DEV TI</div>
    <div id="menu" >
        <?php include "menu.php";?>
    </div>
    <div id="corpo" >
        <?php 
            if(isset($_GET["pagina"])) {
                if(file_exists($_GET["pagina"].".php")){
                    include $_GET["pagina"].".php";
                } else {
                    include "404.php";
                }
            } else{
                include "corpo.php";
            }
        ?>
    </div>
    <div id="final">
        @2022 - Curso Dev TI
    </div>
</body>
</html>