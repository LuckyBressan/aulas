<?php 
    if(isset($_POST['deletar'])) {
        $sql = "DELETE from fornecedores where IDFornecedor = :id";
        $parse = $conn->prepare($sql);
        $parse->execute(array("id" => $_GET['ID']));
        header("Location: ?pagina=listagem");
    }
?>
<h1>Deletar Fornecedor</h1>
<?php 
    $sql = "SELECT f.IDFornecedor, f.NomeCompanhia, f.NomeContato, f.Cidade, f.Regiao, f.Telefone, f.TItuloContato, f.Pais
            from fornecedores f where IDFornecedor = :id";
    $consulta = $conn -> prepare($sql);
    $consulta->execute(array("id" => $_GET['ID']));
    $linha = $consulta->fetch();
?>
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
        <input type="submit" name="deletar" class="btn btn-warning" value="Confirmar Exclusão">
    </div>