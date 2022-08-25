var n = Array();
//var i = 0;
var menor = 999999;
var maior = 0;
var cont_p=0;
var cont_i=0;
/*var par = Array();
var impar = Array();*/

function mostramsg(msg) {
    document.getElementById("resultado").innerHTML = msg; 
    setTimeout(() => {
       document.getElementById("resultado").innerHTML = ""; 
    }, 3000);
}

function salvar() {
    /*if(i=0) {
        n[i] = document.getElementById('valores').value;
        i++;
    } else {
        n[i]= document.getElementById('valores').value;
        i++;
    }
    for($x=0;$x<2;$x++) {
        if(n[$x]==document.getElementById('valores').value) {
            alert("salvo");
        }
        alert(n[$x]);
    }*/
    n.push(parseFloat(document.getElementById('valores').value));
    alert(n);
}
function calcular() {
    for($i=0;$i<n.length;$i++) {
        if(n[$i]<menor) {
            menor = n[$i];
        }
        if(n[$i]>maior) {
            maior = n[$i];
        }
        if(n[$i]%2==0){
            cont_p++;
            //par[$i] = n[$i];
        } else {
            cont_i++;
            //impar[$i] = n[$i];
        }
    }
    alert("O menor valor informado é "+menor);
    alert("O maior valor informado é "+maior);
    alert("A quantidade de números pares informada foi "+cont_p);//+" sendo eles ("+par+")");
    alert("A quantidade de números impares informada foi "+cont_i);//" sendo eles ("+impar+")");
    mostramsg("CÁLCULO FEITO!!!");
}