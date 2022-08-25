<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Meses</title>
    <script>
        var mes = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
        var escolha = window.prompt("Informe um número que lhe dará o mês: <digite 0 se quiser encerrar> ");
        while (escolha != 0) {
            if(!isNaN(escolha)){
                if (escolha>0 && escolha<13) {
                    window.alert("O mês correspondente é "+mes[escolha-1]);
                } else {
                    window.alert("ERRO: O NÚMERO INFOMRADO NÃO CORRESPONDE A UM MÊS");
                }
                
            } else {
                window.alert("ERRO: O VALOR INFORMADO NÃO É NUMÉRICO");
            }
            escolha = window.prompt("Informe um número que lhe dará o mês: <digite 0 se quiser encerrar> ");
        }
    </script>