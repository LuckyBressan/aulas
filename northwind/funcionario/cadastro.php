<?php 
    if(isset($_POST['salvar'])) {
        $uploadir = 'funcionario/arquivos/';
        $uploadfile = $uploadir . floor(microtime(true) * 1000) . " - " . basename($_FILES['foto']['name']);
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile)) {
            echo '<div class="alert alert-success">Upload feito com Sucesso</div>';
        } else {
            echo '<div class="alert alert-danger">Falha no Upload</div>';
        }

        $sql = "INSERT into funcionarios(Sobrenome, Nome, TituloCortesia, Cidade , Regiao, Pais, TelefoneResidencial, FotoCaminho) values (:sobrenome, :nome, 
                :titulo, :cidade, :regiao, :pais, :telefone, :foto);";
        $funcionario = $conn->prepare($sql);
        if($funcionario->execute(array('sobrenome'=>$_POST['sobrenome'], 'nome'=>$_POST['nome'], 'titulo'=>$_POST['titulo'], 'cidade'=>$_POST['cidade'], 'regiao'=>$_POST['regiao'], 
        'pais'=>$_POST['pais'],'telefone'=>$_POST['telefone'], 'foto'=>$uploadfile))) {
           echo '<div class="alert alert-success">Dados Cadastrados com Sucesso</div>';
        }
    }
?>
<h1>Funcionário</h1>
<form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="funcionario">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Informe o nome..." required>
        </div>
        <div class="mb-3">
            <label for="sobrenome" class="form-label">Sobrenome:</label>
            <input type="text" name="sobrenome" id="sobrenome" class="form-control" placeholder="Informe o Sobrenome..."required>
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Título de Cortesia:</label>
            <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Informe o Título de Cortesia..."required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Informe o Telefone..."required>
        </div>
        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade:</label>
            <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Informe a Cidade..."required>
        </div>
        <div class="mb-3">
            <label for="regiao" class="form-label">Região:</label>
            <input type="text" name="regiao" id="regiao" class="form-control" placeholder="Informe a Região...">
        </div>
        <div class="mb-3">
            <label for="pais" class="form-label">País:</label>
            <input type="text" name="pais" id="pais" class="form-control" placeholder="Informe o País..."required>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto de Perfil:</label>
            <input class="form-control" type="file" id="foto" name="foto">
        </div>
    
        
        <div class="mb-3">
            <input type="submit" name="salvar" class="btn btn-primary" value="Cadastrar">
        </div>
</form>