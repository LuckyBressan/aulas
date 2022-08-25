<?php 
    if(isset($_POST['deletar'])) {
        $sql = "DELETE from produtos where codigo = :codigo";
        $parse = $conn->prepare($sql);
        $parse->execute(array("codigo" => $_GET['codigo']));
        header("Location: ?pagina=produtos_lista");
    }
?>

<h1>Deletar Produtos</h1>
<?php 
    $sql = "SELECT * from produtos where codigo = :codigo";
    $consulta = $conn -> prepare($sql);
    $consulta->execute(array("codigo" => $_GET['codigo']));
    $linha = $consulta->fetch();
?>
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $linha['nome']; ?>">
    </div>
    <div class="mb-3">
        <label for="valor" class="form-label">Valor:</label>
        <input type="number" name="valor" id="valor" class="form-control" value="<?php echo $linha['valor']; ?>">
    </div>
    <div class="mb-3">
        <label for="grupo" class="form-label">Grupo:</label>
        <select class="form-select" name="grupo">
            <option>Selecione o Grupo</option>
            <?php 
                $sql = "select * from produtos_grupos";
                $grupos = $conn->prepare($sql);
                $grupos->execute(); 
                while ($linha_gru = $grupos->fetch()) {
                    if($linha_gru['id']==$linha['grupo_id']) {
                        echo "<option value='",$linha_gru['id'],"'selected>",$linha_gru['descricao'],"</option>";
                    } else {
                        echo "<option value='",$linha_gru['id'],"'>",$linha_gru['descricao'],"</option>";
                    }
                }
            ?>
        </select>
    </div>
<form method="post">
    <input type="submit" name="deletar" class="btn btn-warning" value="Confirmar Exclusão">
</form>