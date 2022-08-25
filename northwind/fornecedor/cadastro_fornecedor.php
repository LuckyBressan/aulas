<?php
    if(isset($_POST['salvar'])) {
        $sql = "INSERT INTO fornecedores(NomeCompanhia, Telefone,NomeContato, TItuloContato, Cidade, Regiao,Pais) VALUES(:nome, :telefone, :nomecontato, :titulo, :cidade,
        :regiao, :pais)";
        $cadastro = $conn->prepare($sql);
        if($cadastro->execute(array("nome"=>$_POST['nome'], "telefone"=>$_POST['telefone'], "nomecontato"=>$_POST['nomecontato'],
            "titulo"=>$_POST['titulocontato'], "cidade"=>$_POST['cidade'],"regiao"=>$_POST['regiao'],"pais"=>$_POST['pais']))){
            echo '<div class="alert alert-success">Dados Cadastrados com Sucesso</div>';
        }
    }
?>
<h1>Fornecedor</h1>
<form method="post">
    <input type="hidden" name="fornecedor">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" placeholder="Informe o Fornecedor...">
    </div>
    <div class="mb-3">
        <label for="cidade" class="form-label">Cidade:</label>
        <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Informe a Cidade...">
    </div>
    <div class="mb-3">
        <label for="regiao" class="form-label">Região:</label>
        <input type="text" name="regiao" id="regiao" class="form-control" placeholder="Informe a Região...">
    </div>
    <div class="mb-3">
        <label for="pais" class="form-label">País:</label>
        <input type="text" name="pais" id="pais" class="form-control" placeholder="Informe o País...">
    </div>
    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone:</label>
        <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Informe o Contato...">
    </div>
    <div class="mb-3">
        <label for="nomecontato" class="form-label">Nome do Contato:</label>
        <input type="text" name="nomecontato" id="nomecontato" class="form-control" placeholder="Informe o Nome do Contato...">
    </div>
    <div class="mb-3">
        <label for="titulocontato" class="form-label">Título do Contato:</label>
        <input type="text" name="titulocontato" id="titulocontato" class="form-control" placeholder="Informe o Título do Contato...">
    </div>
    <div class="mb-3">
        <input type="submit" name="salvar" class="btn btn-primary" value="Cadastrar">
    </div>
</form>