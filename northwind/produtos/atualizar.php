<?php 
     if(isset($_POST['atualizar'])) {
        $sql = "UPDATE produtos set NomeProduto = :nome, PrecoUnitario = :preco, UnidadesEmEstoque = :estoque, IDCategoria = :categoria, IDFornecedor = :fornecedor where IDProduto = :id";
        $atualiza = $conn->prepare($sql);
        if($atualiza->execute(array("nome"=>$_POST['nome'], "preco"=>$_POST['preco'], "estoque"=>$_POST['estoque'], "categoria"=>$_POST['categoria'], "fornecedor"=>$_POST['fornecedor'], "id"=>$_GET['ID']))){
            echo '<div class="alert alert-success">Dados Atualizados com Sucesso</div>';
            header("Location: ?pagina=listagem");
        }
        }

    $sql = "SELECT IDProduto, NomeProduto, PrecoUnitario, UnidadesEmEstoque, IDCategoria, IDFornecedor
            from produtos
            where IDProduto = :id";
    $produto = $conn->prepare($sql);
    $produto->execute(array("id"=>$_GET['ID']));

    $linha = $produto->fetch();
?>
<h1>Atualizar Produtos</h1>
    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $linha['NomeProduto']; ?>">
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço:</label>
            <input type="number" name="preco" id="preco" class="form-control" value="<?php echo $linha['PrecoUnitario']; ?>">
        </div>
        <div class="mb-3">
            <label for="estoque" class="form-label">Estoque:</label>
            <input type="number" name="estoque" id="estoque" class="form-control" value="<?php echo $linha['UnidadesEmEstoque']; ?>">
        </div>
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoria:</label>
            <select class="form-select" name="categoria" id="categoria">
                <option>Selecione a Categoria</option>
                <?php 
                    $sql = "select * from categorias";
                    $categorias = $conn->prepare($sql);
                    $categorias->execute(); 
                    while ($linha_cat = $categorias->fetch()) {
                        if($linha_cat['IDCategoria']==$linha['IDCategoria']) {
                            echo "<option value='",$linha_cat['IDCategoria'],"'selected>",$linha_cat['NomeCategoria'],"</option>";
                        } else {
                            echo "<option value='",$linha_cat['IDCategoria'],"'>",$linha_cat['NomeCategoria'],"</option>";
                        }
                    }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="fornecedor" class="form-label">Fornecedor:</label>
            <select class="form-select" name="fornecedor" id="fornecedor">
                <option>Selecione o Fornecedor</option>
                <?php 
                    $sql = "select * from fornecedores";
                    $fornecedores = $conn->prepare($sql);
                    $fornecedores->execute(); 
                    while ($linha_for = $fornecedores->fetch()) {
                        if($linha_for['IDFornecedor']==$linha['IDFornecedor']) {
                            echo "<option value='",$linha_for['IDFornecedor'],"'selected>",$linha_for['NomeCompanhia'],"</option>";
                        } else {
                            echo "<option value='",$linha_for['IDFornecedor'],"'>",$linha_for['NomeCompanhia'],"</option>";
                        }
                    }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar">
        </div>
    </form>