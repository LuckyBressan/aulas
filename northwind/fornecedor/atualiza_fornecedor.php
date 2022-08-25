<?php 
    if(isset($_POST['atualizar'])) {
        $sql = "UPDATE fornecedores set NomeCompanhia = :nome, Telefone = :telefone, NomeContato = :nomecontato, TItuloContato = :titulo, Cidade = :cidade, 
        Regiao = :regiao, Pais = :pais  where IDFornecedor = :id";
        $atualiza = $conn->prepare($sql);
        if($atualiza->execute(array("nome"=>$_POST['nome'], "telefone"=>$_POST['telefone'], "nomecontato"=>$_POST['nomecontato'],
            "titulo"=>$_POST['titulocontato'], "cidade"=>$_POST['cidade'],"regiao"=>$_POST['regiao'],"pais"=>$_POST['pais'] , "id"=>$_GET['ID']))){
            echo '<div class="alert alert-success">Dados Atualizados com Sucesso</div>';
        }
    }

    $sql = "SELECT f.IDFornecedor, f.NomeCompanhia, f.NomeContato, f.Cidade, f.Regiao, f.Telefone, f.TItuloContato, f.Pais
            from fornecedores f where IDFornecedor = :id";
    $fornecedor = $conn->prepare($sql);
    $fornecedor->execute(array("id"=>$_GET['ID']));

    $linha = $fornecedor->fetch();
?>

<h1>Atualizar Fornecedor</h1>
<form method="post">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $linha['NomeCompanhia']; ?>">
    </div>
    <div class="mb-3">
        <label for="cidade" class="form-label">Cidade:</label>
        <input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo $linha['Cidade']; ?>">
    </div>
    <div class="mb-3">
        <label for="regiao" class="form-label">Região:</label>
        <input type="text" name="regiao" id="regiao" class="form-control" value="<?php echo $linha['Regiao']; ?>">
    </div>
    <div class="mb-3">
        <label for="pais" class="form-label">País:</label>
        <input type="text" name="pais" id="pais" class="form-control" value="<?php echo $linha['Pais']; ?>">
    </div>
    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone:</label>
        <input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo $linha['Telefone']; ?>">
    </div>
    <div class="mb-3">
        <label for="nomecontato" class="form-label">Nome do Contato:</label>
        <input type="text" name="nomecontato" id="nomecontato" class="form-control" value="<?php echo $linha['NomeContato']; ?>">
    </div>
    <div class="mb-3">
        <label for="titulocontato" class="form-label">Título do Contato:</label>
        <input type="text" name="titulocontato" id="titulocontato" class="form-control" value="<?php echo $linha['TItuloContato']; ?>">
    </div>
    <div class="mb-3">
        <input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar">
    </div>
</form>