<?php 
    if(isset($_POST['deletar'])) {
        $sql = "DELETE from produtos where IDProduto = :id";
        $parse = $conn->prepare($sql);
        $parse->execute(array("id" => $_GET['ID']));
        header("Location: ?pagina=listagem");
    }
?>
<h1>Deletar Produtos</h1>
<?php 
    $sql = "SELECT p.NomeProduto, p.PrecoUnitario, p.UnidadesEmEstoque, c.NomeCategoria, f.NomeCompanhia
    FROM produtos p 
    inner join fornecedores f on (p.IDFornecedor = f.IDFornecedor)
    inner join categorias c on (p.IDCategoria = c.IDCategoria)
    where IDProduto = :id";
    $consulta = $conn -> prepare($sql);
    $consulta->execute(array("id" => $_GET['ID']));
    $linha = $consulta->fetch();
?>
<form method="post">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $linha['NomeProduto']; ?>">
    </div>
    <div class="mb-3">
        <label for="preco" class="form-label">Preço Unitário:</label>
        <input type="text" name="preco" id="preco" class="form-control" value="<?php echo $linha['PrecoUnitario']; ?>">
    </div>
    <div class="mb-3">
        <label for="estoque" class="form-label">Estoque:</label>
        <input type="text" name="estoque" id="estoque" class="form-control" value="<?php echo $linha['UnidadesEmEstoque']; ?>">
    </div>
    <div class="mb-3">
        <label for="categoria" class="form-label">Categoria:</label>
        <input type="text" name="categoria" id="categoria" class="form-control" value="<?php echo $linha['NomeCategoria']; ?>">
    </div>
    <div class="mb-3">
        <label for="fornecedor" class="form-label">Fornecedor:</label>
        <input type="text" name="fornecedor" id="categoria" class="form-control" value="<?php echo $linha['NomeCompanhia']; ?>">
    </div>
    <div class="mb-3">
        <input type="submit" name="deletar" class="btn btn-warning" value="Confirmar Exclusão">
    </div>