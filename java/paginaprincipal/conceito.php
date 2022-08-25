<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        document.write("Exemplos de Conceitos em JavaScript<br>");
        document.write("Os comentários são // Uma Linha e /* ..Várias Linhas.. */<br>");
        //é recomendado deixar vários comentários
        //Essa linha está comentada - O objeto console permite interagir
        console.log("Comando após o comentário de uma linha");
        /*
        Comentários de várias linjas
        Permite ter um descritivo maior dentro do código
        Ou suspender parte do código
        */
        console.log("Mensagem após o comentário de várias linhas");
        document.write("Variáveis<br>");
        var nome=""; //variável nome do tipo caracteres
        nome=window.prompt("Qual seu nome? ");
        document.write("Olá "+nome+" tenha um bom dia T-T<br>");
        var numero=12; //variável númerica
        document.write("O valor "+numero+" vezes ele é: ");
        resultado = numero * numero; //atribuição de cálculo
        document.write(resultado+" <br>");
        var verdadeiro = true; //variável boleana
        document.write("O valor da variável 'verdadeiro' é: <br>");
        document.write(verdadeiro)
        verdadeiro = ! verdadeiro; //tranforma verdadeiro para falso
        document.write("<br>")
        document.write(verdadeiro)
        
        
        //valor=parseInt(valor)

    </script>
    <title>Conceitos JavaScript</title>
</head>
<body>
    
</body>
</html>