<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Meses</title>
    <script>
        var mostra = ""
        var mes = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
        var escolha = window.prompt("Informe um número que lhe dará o mês: <digite 0 se quiser encerrar> ");
        while (escolha != 0) {
            if (isNaN(escolha)){
            document.write("EROO: O VALOR INFORMADO NÃO É UM NÚMERO");  
            } else {
                if (escolha==1) {
                    mostra = ("O mês correspondente é "+mes[escolha-1]);
                } else if (escolha==2) {
                    mostra = ("O mês correspondente é "+mes[escolha-1]);
                } else if (escolha==3) {
                   mostra = ("O mês correspondente é "+mes[escolha-1]);
                } else if (escolha==4) {
                    mostra = ("O mês correspondente é "+mes[escolha-1]);
                } else if (escolha==5) {
                    mostra = ("O mês correspondente é "+mes[escolha-1]);
                } else if (escolha==6) {
                    mostra = ("O mês correspondente é "+mes[escolha-1]);
                } else if (escolha==7) {
                    mostra = ("O mês correspondente é "+mes[escolha-1]);
                } else if (escolha==8) {
                    mostra = ("O mês correspondente é "+mes[escolha-1]);
                } else if (escolha==9) {
                    mostra = ("O mês correspondente é "+mes[escolha-1]);
                } else if (escolha==10) {
                    mostra = ("O mês correspondente é "+mes[escolha-1]);
                } else if (escolha==11) {
                    mostra = ("O mês correspondente é "+mes[escolha-1]);
                } else if (escolha==12) {
                    mostra = ("O mês correspondente é "+mes[escolha-1]);
                }
                alert(mostra)
                var escolha = window.prompt("Informe um número que lhe dará o mês: <digite 0 se quiser encerrar> ");
            }
        }
            

    </script>
</head>
<body>
    
</body>
</html>