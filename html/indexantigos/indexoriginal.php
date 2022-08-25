<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Web 1</title>
</head>
<body>
    <table border="1" align="center" width="90%">
        <tr>
            <td align="center" height="100" bgcolor="#ccc" colspan="2">Aulas Web - Dev TI</td>
        </tr>
        <tr>
            <td height="400" valign="top" widht="200">
                <?php include "menu.php"; ?>
            </td>
            
            <td valign="top" >
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
            </td>
        </tr>
        <tr>
            <td align="center"  bgcolor="#c3c3c3" colspan="2">@2022 - Curso Dev TI</td>
        </tr>
    </table>

    
   
</body>
</html>