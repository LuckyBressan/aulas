function mostramsg(msg) {
    document.getElementById("dMsg").innerHTML = msg; 
    setTimeout(() => {
       document.getElementById("dMsg").innerHTML = ""; 
    }, 3000);
}

function fValida() {
    const vnome=document.getElementById("vNome");
    const vemail=document.getElementById("vEmail");
    const vfone=document.getElementById("vFone");
    const vmensagem=document.getElementById("vMensagem");
    var valido = true; //variavel para controlar validação
    var analise = /\S+@\S+\.\S+/; //variavel que valida os carecteres
    var analise_fone = /[(]?[0-9]{2}[)]?[0-9]{4,5}[-\s]?[0-9]{4,6}$/im;


    //Verificar Nome foi preenchido
    if (vnome.value == "") {
        mostramsg("Nome é Obrigatório");
        vnome.focus();
        valido = false;
    } else if (vemail.value == "") {
        mostramsg("E-mail é Obrigatório");
        vemail.focus();
        valido = false;
    } else if (vfone.value == "") {
        mostramsg("Fone é Obrigatório");
        vfone.focus();
        valido = false;
    }  else if (vmensagem.value == "") {
        mostramsg("Mensagem é Obrigatório");
        vmensagem.focus();
        valido = false;
    }
    if (analise_fone.test(vfone.value)!=true) {
        alert("Fone inválido");
        valido = false;
    }

    if(analise.test(vemail.value) != true) {
        alert("O EMAIL INFORMADO É INVÁLIDO");
        vemail.focus();
        valido=false
    }
    if(valido==true) {
        mostramsg("Tudo Válido!");
    }
    return(valido);
}