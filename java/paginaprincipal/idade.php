<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        var nome = "";
        var idade = "";
        mostra = "";
        nome = window.prompt("Seu nome <'Digite sair para encerrar'>: ");
        while (nome != "sair") {
            idade = window.prompt("Sua idade: ");
            categoria="";
            if(idade<18){
                categoria = "menor"
            } else {
                categoria = "maior"
            }
            mostra = mostra + (nome+" você é "+categoria+" de idade") + "\n";
            
            var sexo = window.prompt("Informe seu sexo (M/F): ");
            nomesexo = (sexo == "M" || sexo == "m"?"homem":"mulher");
            mostra = mostra + ("Seu sexo é "+nomesexo) + "\n";
            alert(mostra)
            nome = window.prompt("Seu nome <'Digite sair para encerrar'>: ")
        }
        
    </script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>