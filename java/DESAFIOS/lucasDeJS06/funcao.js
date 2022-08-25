function pintar() {
    var red = document.getElementById('red').value;
    var green = document.getElementById('green').value;
    var blue = document.getElementById('blue').value;
    var cores = red+green+blue;

    if(red<=255 & green<=255 & blue<=255 & red>=0 & green>=0 & blue>=0) {
        document.getElementById('cor').style.backgroundColor = "rgb("+red+","+green+","+blue+")";
    } else {
        alert("Os valores devem ser maiores que 0 e menores que 255");
    }
}