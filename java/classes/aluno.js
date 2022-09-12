class Aluno {
    constructor(nome, n1, n2, n3) {
        this.nome = nome;
        this.n1 = n1;
        this.n2 = n2;
        this.n3 = n3;
    }
    media () {
        let nota = parseFloat(this.n1) + parseFloat(this.n2) + parseFloat(this.n3);
        return nota/3;
    }

    get _nome() {
        return this.nome;
    }
    get _n1() {
        return this.n1;
    }
    get _n2() {
        return this.n2;
    }
    get _n3() {
        return this.n3;
    }
}
var alunos = [];

function novoaluno(nome, nota1, nota2, nota3) {
    let aluno = new Aluno(nome, nota1, nota2, nota3);
    alunos.push(aluno);
    return aluno.media();
}
function ListaAluno(separa_n = ' : ', separa = ' : ', separadorlinha = ";") {
    let lista = "";
    alunos.forEach(function(aluno,i) {
        lista += aluno._nome + separa_n + aluno._nota1 + separa + aluno._nota2 + separa + aluno._nota3 + " (Média: " + aluno.media() + ") " + separadorlinha;
    })
    return lista;
}

function LimpaAluno() {
    alunos = [];
}

function ContAluno() {
    return alunos.length;
}

