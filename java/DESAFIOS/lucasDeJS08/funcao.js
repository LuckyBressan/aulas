function mostramsg(msg) {
    document.getElementById('resposta').innerHTML = msg;
}

function consulta() {
    var n = parseInt(document.getElementById('ano').value);
    if(n%400==0) {
        mostramsg("O ANO INFORMADO É BISSEXTO");
    } else if (n%4==0 & n%100!=0) {
        mostramsg("O ANO INFORMADO É BISSEXTO");
    } else {
        mostramsg("O ANO INFORMADO NÃO É BISSEXTO");
    }
}