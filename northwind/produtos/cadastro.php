<?php 
    if(isset($_POST['salvar_p'])) {
        $sql = "INSERT into produtos(NomeProduto, PrecoUnitario, UnidadesEmEstoque, IDCategoria, IDFornecedor) values (:nome, :preco, :estoque, :categoria, :fornecedor);";
        $consulta = $conn->prepare($sql);
        if($consulta->execute(array('nome'=>$_POST['nome'],'preco'=>$_POST['preco'],'estoque'=>$_POST['estoque'], 'categoria'=>$_POST['categoria'], 'fornecedor'=>$_POST['fornecedor']))) {
            echo '<div class="alert alert-success">Dados Cadastrados com Sucesso</div>';
        }
    }
?>
<h1>Produtos</h1>
<form method="post">
        <input type="hidden" name="produto">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Informe o Produto...">
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço:</label>
            <input type="number" name="preco" id="preco" class="form-control" placeholder="Informe o Preço...">
        </div>
        <div class="mb-3">
            <label for="estoque" class="form-label">Estoque:</label>
            <input type="number" name="estoque" id="estoque" class="form-control" placeholder="Informe o Estoque...">
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
                            echo "<option value='",$linha_cat['IDCategoria'],"'>",$linha_cat['NomeCategoria'],"</option>";
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
                            echo "<option value='",$linha_for['IDFornecedor'],"'>",$linha_for['NomeCompanhia'],"</option>";
                        } else {
                            echo "<option value='",$linha_for['IDFornecedor'],"'>",$linha_for['NomeCompanhia'],"</option>";
                        }
                    }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" name="salvar_p" class="btn btn-primary" value="Cadastrar">
        </div>
    </form>