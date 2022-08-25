<h1>Cadastro de Produtos</h1>

<?php 
    if(isset($_POST['salvar'])) {
        $sql = "INSERT into produtos(nome, valor, grupo_id) values (:nome,:valor,:grupo_id)";
        $consulta = $conn->prepare($sql);
        if($consulta->execute(array('nome'=>$_POST['nome'],'valor'=>$_POST['valor'],'grupo_id'=>$_POST['grupo']))) {
            echo '<div class="alert alert-success">Dados Cadastrados com Sucesso</div>';
        }
    }
?>
<form method="post">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" placeholder="Informe o produto...">
    </div>
    <div class="mb-3">
        <label for="valor" class="form-label">Valor:</label>
        <input type="number" name="valor" id="valor" class="form-control" placeholder="Informe o valor...">
    </div>
    <div class="mb-3">
        <label for="grupo" class="form-label">Grupo:</label>
        <select class="form-select" aria-label="Default select example" id="grupo"  name="grupo">
            <option selected>Selecione um Grupo</option>
            <?php 
                $sql = 'SELECT * from produtos_grupos';
                $consulta = $conn->prepare($sql);
                $consulta -> execute();
                while ($linha = $consulta->fetch()) {
                    echo "<option value=\"{$linha['id']}\">{$linha['descricao']}</option>";
                }
            ?>
        </select>
    </div>
    <input type="submit" class="btn btn-success" name="salvar" value="Salvar">
</form>