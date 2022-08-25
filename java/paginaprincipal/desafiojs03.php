<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        var n="";
        n = window.prompt("Informe um valor: ");
        if (isNaN(n)){
            document.write("ERRO: o valor informado não é um número!!!")
        } else {
            if (n<0){
                document.write("O valor informado foi "+n+"<br>")
                document.write(n+" é menor que 0, portanto negativo<br>");
            } else {
                document.write("O valor informado foi "+n+"<br>")
                document.write(n+" é maior que 0, portanto positivo<br>");
                if(n>999){
                    document.write("O número "+n+" é um MILHAR");
                    if (n>10000){
                        diferenca = n - 10000;
                        document.write("<br>O numero é maior que 10.000, com uma diferença de "+diferenca);
                    } else {
                        diferenca = 10000 - n;
                        document.write("<br>O numero é menor que 10.000, com uma diferença de "+diferenca);
                    }
                } else if(n>99) {
                    document.write("O número "+n+" é uma CENTENA")
                } else if(n>9) {
                    document.write("O número "+n+" é uma DEZENA")
                } else {
                    document.write("O número "+n+" é uma UNIDADE")
                }
            }
        }
    </script>
    <title>Desafio 3</title>
</head>
<body>
    
</body>
</html>