<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function fIdade(idade) {
            if(idade<18) {
                return ("menor");
            } else {
                return ("maior");
            }
        }
        function fSexo(sexo) {
            return ((sexo == "M" || sexo == "m"?"homem":"mulher"));
        }
        function mostra(nome, idade, sexo) {
            window.alert((nome+" voce é "+fIdade(idade)+" de idade e é "+fSexo(sexo)));
        }
    </script>
</head>
<body>
    <h1>Exemplo de idade com funções 2</h1>
    Nome: <input id="iNome" type="text" value=""><br>
    Idade: <input id="iIdade" type="text" value=""><br>
    Sexo: <input id="iSexo" type="text" value="Informe o sexo m/f"><br>
    <input type="button" value="Mostrar" onclick="mostra(iNome.value, iIdade.value, iSexo.value)">
</body>
</html>