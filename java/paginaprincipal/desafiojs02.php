<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        var n = "";
        n = window.prompt("Informe o número: ");
        var categoria="";
        var categoria_num="";
        if (isNaN(n)){
            document.write("ERRO: O VALOR INFORMADO NÃO É NUMÉRICO")
        } else {
            if(n%2==0){
                categoria = "PAR"
            } else {
                categoria = "ÍMPAR"
            }
            if(n>999){
                categoria_num = "MILHAR"
            } else if(n>99) {
                categoria_num = "CENTENA"
            } else if(n>9) {
                categoria_num = "DEZENA"
            } else {
                categoria_num = "UNIDADE"
            }
            document.write("O número informado foi "+n);
            document.write("<br>Ele é "+categoria);
            document.write("<br>Ele é um(a) "+categoria_num);
        }

    </script>
    <title>Desafio 02</title>
</head>
<body>
    
</body>
</html>