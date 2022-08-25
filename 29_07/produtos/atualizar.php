<?php
    if(isset($_POST['atualizar'])) {
        $sql = "UPDATE produtos set nome = :nome, valor = :valor, grupo_id = :grupo where codigo = :codigo";
        $atualiza = $conn->prepare($sql);
        if($atualiza->execute(array("nome"=>$_POST['nome'], "valor"=>$_POST['valor'], "grupo"=>$_POST['grupo'], "codigo"=>$_GET['codigo']))){
            echo '<div class="alert alert-success">Dados Atualizados com Sucesso</div>';
        }
    }

    $sql = "SELECT  * from produtos where codigo = :codigo";
    $produto = $conn->prepare($sql);
    $produto->execute(array("codigo"=>$_GET['codigo']));

    $linha = $produto->fetch();

    //print_r($linha);
?>
<h1>Atualizar Produtos</h1>
<form method="post">
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
        </select><br>
    </div>
    <input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar">
</form>