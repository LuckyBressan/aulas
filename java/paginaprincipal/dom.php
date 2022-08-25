<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM</title>
    <script>
        function altera_campo(){
            var campo = document.getElementById("nome");
            document.getElementById("mostra").innerHTML = campo.value;
        }
    </script>
</head>
<body>
    <h2>Exemplo acesso elementos por DOM</h2>
    Informe seu nome: <input type="text" id="nome" value=""><br>
    <input type="button" value="OK" onclick="altera_campo()">
    <p id="mostra" style="color: rgb(0, 17, 255); font-weight: bold;"></p>
</body>
</html>