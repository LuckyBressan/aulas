<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Vetores - Array's</title>
</head>
<script>
    //Exemplo de Array - vetor simples
    var diasdasemana = ["Segunda-feira", "Terça", "Quarta", "Quinta", "Sexta"];
    document.write("Quantos são os dias da semana?"+diasdasemana.length);
    document.write("<br>");
    for (i=0;i<diasdasemana.length;i++){
        document.write(i+1+"o dia da semana é: "+diasdasemana[i]+"<br>");
    }
    var fimdesemana = new Array(2);
    fimdesemana[0]= "Sábado";
    fimdesemana[1]= "Domingo";
</script>
<body>
    
</body>
</html>