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

function novoaluno(nome, n1, n2, n3) {
    let aluno = new Aluno(nome, n1, n2, n3);
    alunos.push(aluno);
    return aluno.media();
}
function ListaAluno(separa_n = ' : ', separa = ' : ', separadorlinha = ";") {
    let lista = "";
    alunos.forEach(function(aluno,i) {
        lista += aluno._nome + separa_n + aluno._n1 + separa + aluno._n2 + separa + aluno._n3 + " (Média: " + aluno.media() + ") " + separadorlinha;
    })
    return lista;
}

function LimpaAluno() {
    alunos = [];
}

function ContAluno() {
    return alunos.length;
}

/*let aluno2 = new aluno("João", 6, 9, 9);
let aluno3 = new aluno("Gabriel", 10, 8, 8);*/
