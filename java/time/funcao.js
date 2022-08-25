vIntervalo = null;

function f2d(valor) {
    $valor = valor.toString();
    console.log($valor.lenght);
    if($valor.lenght == 1) {
        $valor = "0"+$valor;
    }
    return ($valor)
}

function fStart() {
    var data = new Date();
    console.log("Data:",data);

    document.getElementById("vData").innerHTML = f2d(data.getDate())+"/"+f2d((data.getMonth()+1))+"/"+f2d(data.getFullYear());
    document.getElementById("vHora").innerHTML = f2d(data.getHours())+":"+f2d(data.getMinutes())+":"+f2d(data.getSeconds());
}

function fHora() {
    var data = new Date();
    return(data.getHours()+":"+data.getMinutes()+":"+data.getSeconds());
}

function fMostraHora(obj) {
    if (vIntervalo != null) {
        fParaMostraHora();
        document.getElementById("acao").value = "Iniciar";
    } else {
        vIntervalo = setInterval(() => {
            obj.innerHTML = fHora();
        },1000);
        document.getElementById("acao").value = "Parar";
    }
}

function fParaMostraHora() {
    clearInterval(vIntervalo);
    vIntervalo = null;
}

function fJogarDado() {
    var numero = Math.floor((Math.random() * 6)+1);
    console.log(numero);
    return (numero);
}

function ir(expressao) {
    window.location.href="https://www.google.com.br/search?q="+expressao.value;
}