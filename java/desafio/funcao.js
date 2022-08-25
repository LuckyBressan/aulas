//PARTE A
var nome = window.prompt("Qual o seu nome?");
var dia = window.prompt("Qual o dia do seu nascimento?");
if (isNaN(dia)) {
    alert("O valor informado é inválido");
    var erro = 1
} else {
    dia = parseInt(dia);
}

var mes = window.prompt("Qual o mês do seu nascimento?");
if (isNaN(mes) || mes>12 || mes<0) {
    alert("O valor informado é inválido");
    erro = 1
} else {
    mes = parseInt(mes);
}

var ano = window.prompt("Qual o ano do seu nascimento?");
if (isNaN(ano)) {
    alert("O valor informado é inválido");
    erro = 1
} else {
    ano = parseInt(ano);
}

function apresentaNascimento() {
    if (erro == 1) {
        var msg_nascimento = "ERRO - DATA INVÁLIDA";
        return msg_nascimento;
    } else {
        var data = dia+"/"+mes+"/"+ano;
        return data;
    }
}

function idade() {
    var d = new Date;
    $dia_atual = d.getDate();
    $mes_atual = d.getMonth();
    $ano_atual = d.getFullYear();

    if (erro == 1) {
        var msg_idade = "ERRO - DATA INVÁLIDA";
        return msg_idade;
    } else {
        cont_anos = $ano_atual - ano;
        
        if ($mes_atual<mes || $mes_atual == mes && dia_atual<dia) {
            cont_anos--;
        }
        return cont_anos < 0 ? 0: cont_anos;
    }
}

//PARTE B
var email = window.prompt("Informe um email pra contato!!");

function verificaEmail() {
    var analise = /\S+@\S+\.\S+/;
    if(analise.test(email) == true) {
        return email;
    } else {
        var msg_email = "O EMAIL INFORMADO É INVÁLIDO";
        return msg_email;
    }
}