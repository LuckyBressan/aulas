<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo execução de eventos</title>
    <script>
        function show(msg){
            janela = window.open("","_blank","widht=400","height=200");
            janela.document.write("<h1>"+msg+"</h1>");
            janela.document.write("<input type='button' value='ok' onclick='window.close()'>");

            return (janela)
        }
    </script>
</head>
<!--evento onload-->
<body onload="show('Página terminou de carregar')">
    <h2>Apresentação</h2>
    <p>Essa página tem por propósito mostrar a execução de eventos JavaScript</p>
    <br>
    <!-- Evento onchange quando um elemento perde o foco e teve alteração de seu conteúdo -->
    Seu nome: <input type="text" name="nome" id="inome" value="" onchange="show('Olá '+inome.value,'#00FF00')"><br>
    <!-- Evento onblur quando um elemento perde o foco, ao sair do elemento.-->
    Sua idade: <input type="text" name="IDADE" id="idade" value="" onblur="show(inome.value+' você saiu da idade independente de alterar o contéudo','#00FF00')"><br>
</body>
</html>