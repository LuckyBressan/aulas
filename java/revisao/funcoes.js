function verifica_salario(salario) {
    var salario = document.getElementById("salario").value;
    var valido = true;
    if(salario>0) {
        return(valido);
    } else {
        valido = false;
        alert("O Salário Informado deve ser maior que 0");
        document.getElementById("salario").focus();
        return (valido);
    }
}