<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        var escolha = window.prompt('1 - Tabuada Normal\n2 - Tabuada Relativa\n3 - Fatorial');
        if (isNaN(escolha)){
            document.write("ERRO: VALOR INFORMADO ESTÁ ERRADO")
        } else {
            switch(escolha){
            //PARTE A
            case "1":
                var n = "";
                n = window.prompt("informe um número...");
                if (isNaN(n)){
                    document.write("ERRO: O VALOR INFORMADO NÃO É NUMÉRICO");
                } else {
                    document.write("A tabuada de 0 a 10 desse número é: ");
                    document.write("<ol>");
                        for (i = 0; i<=10; i++) {
                            document.write("<li>"+n+" x "+i+" = "+(n*i))
                        }
                    document.write("</ol>");
                }
            break;
            //PARTE B
            case "2":
                var x1="";
                x1 = window.prompt("Informe o X¹: ");
                var x2="";
                x2 = window.prompt("Informe o X²: ");
                if (isNaN(x1) || isNaN(x2)){
                    document.write("ERRO: O VALOR INFORMADO NÃO É NUMÉRICO");
                } else {
                    document.write("<ol>");
                        for (i = 0; i<=x2; i++) {
                            document.write("<li>"+x1+" x "+i+" = "+(x1*i))
                        }
                    document.write("</ol>");
                }
            break;
            //PARTE C
            case "3": 
                var x3 = "";
                x3 = window.prompt("Infomre o x³: ");
                if (isNaN(n)){
                    document.write("ERRO: O VALOR INFORMADO NÃO É NUMÉRICO");
                } else {
                    var fator = 1
                    document.write("<ol>");
                        for (i = x3; i>0; i--) {
                            fator = fator*i
                        }
                        document.write("<li> O fator de "+x3+" é "+fator)
                    document.write("</ol>");
                }
            break;
        }
        }
    </script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>