<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="JavaScript">
        var X=""; var Y="";
        X=window.prompt("Informe a variável X: ");
        X=parseFloat(X);
        Y=window.prompt("Informe a variável Y: ");
        Y=parseFloat(Y);
        equacao = window.prompt("Informe a equação (+,-,*,/): ");
        switch(equacao){
            case "+":
            document.write("A soma de "+X+" e "+Y+" = "+(X+Y))
            break;
            case "-":
            document.write("A subtração de "+X+" e "+Y+" = "+(X-Y));
            break;
            case "*":
            document.write("A multiplicação de "+X+" e "+Y+" = "+(X*Y));
            break;
            case "/":
            document.write("A divisão de "+X+" e "+Y+" = "+(X/Y));
            break;
        }

    </script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>