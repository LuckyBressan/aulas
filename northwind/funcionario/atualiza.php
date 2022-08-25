<?php 
    if(isset($_POST['atualizar'])) {
        $uploadir = 'funcionario/arquivos/';
        $uploadfile = $uploadir . floor(microtime(true) * 1000) . " - " . basename($_FILES['foto']['name']);
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile)) {
            echo '<div class="alert alert-success">Upload feito com Sucesso</div>';
        } else {
            echo '<div class="alert alert-danger">Falha no Upload</div>';
        }
        $sql = "UPDATE funcionarios set Sobrenome =:sobrenome, Nome = :nome, TituloCortesia = :titulo, Cidade= :cidade, Regiao = :regiao, Pais=:pais, TelefoneResidencial = :telefone,
        FotoCaminho = :foto where IDFuncionario = :id";
        $atualiza = $conn->prepare($sql);
        if($atualiza->execute(array('sobrenome'=>$_POST['sobrenome'], 'nome'=>$_POST['nome'], 'titulo'=>$_POST['titulo'], 'cidade'=>$_POST['cidade'], 'regiao'=>$_POST['regiao'], 
        'pais'=>$_POST['pais'],'telefone'=>$_POST['telefone'], 'foto'=>$uploadfile, 'id'=>$_GET['id']))) {
            echo '<div class="alert alert-success">Dados Atualizados com Sucesso</div>';
            header('Location: ?pagina=listagem');
        }
    }
?>

<h1>Atualizar Funcionário</h1>
<?php 
    $sql = "SELECT IDFuncionario, Nome, Sobrenome, TituloCortesia, Cidade , Regiao, TelefoneResidencial, FotoCaminho, Pais
    FROM funcionarios where IDFuncionario = :id";
    $consulta = $conn->prepare($sql);
    $consulta->execute(array('id'=>$_GET['id']));

    $linha = $consulta->fetch();
?>
<form method="post" enctype="multipart/form-data">
        <input type="hidden" name="cliente">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $linha['Nome'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="sobrenome" class="form-label">Sobrenome:</label>
            <input type="text" name="sobrenome" id="sobrenome" class="form-control" value="<?php echo $linha['Sobrenome'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Título de Cortesia:</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo $linha['TituloCortesia'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo $linha['TelefoneResidencial'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade:</label>
            <input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo $linha['Cidade'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="regiao" class="form-label">Região:</label>
            <input type="text" name="regiao" id="regiao" class="form-control" value="<?php echo $linha['Regiao'] ?>">
        </div>
        <div class="mb-3">
            <label for="pais" class="form-label">País:</label>
            <input type="text" name="pais" id="pais" class="form-control" value="<?php echo $linha['Pais'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto de Perfil:</label>
            <input class="form-control" type="file" id="foto" name="foto">
        </div>
        <div class="mb-3">
            <input type="submit" name="atualizar" class="btn btn-success" value="Atualizar">
        </div>
</form>