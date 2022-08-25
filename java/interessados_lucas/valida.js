function valida() {
    const vnome=document.getElementById("iNome");
    const vemail=document.getElementById("iEmail");
    const vfone=document.getElementById("iFone");
    var valido = true; //variavel para controlar validação
    var analise = /\S+@\S+\.\S+/; //variavel que valida os carecteres
    var analise_fone = /[(]?[0-9]{2}[)]?[0-9]{4,5}[-\s]?[0-9]{4,6}$/im;


    //Verificar Nome foi preenchido
    if (vnome.value == "") {
        alert("Nome é Obrigatório");
        vnome.focus();
        valido = false;
        document.getElementById("bSalvar").name = 'salvar';
    } else if (vemail.value == "") {
        alert("e-mail é Obrigatório");
        vemail.focus();
        valido = false;
        document.getElementById("bSalvar").name = 'salvar';
    } else if (vfone.value == "") {
        alert("Fone é Obrigatório");
        vfone.focus();
        valido = false;
        document.getElementById("bSalvar").name = 'salvar';
    }
    if (analise_fone.test(vfone.value)!=true) {
        alert("Fone inválido");
        valido = false;
        document.getElementById("bSalvar").name = 'salvar';
    }
    if(analise.test(vemail.value) != true) {
        alert("O EMAIL INFORMADO É INVÁLIDO");
        vemail.focus();
        valido=false
        document.getElementById("bSalvar").name = 'salvar';
    }
    return(valido);
}