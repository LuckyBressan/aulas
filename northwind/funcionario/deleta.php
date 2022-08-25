<?php 
    if(isset($_POST['deleta'])) {
        $sql = "DELETE from funcionarios where IDFuncionario = :id";
        $deleta = $conn->prepare($sql);
        $deleta->execute(array('id'=>$_GET['id']));
        header('Location: ?pagina=listagem');
    }
?>
<h1>Deletar Funcionário</h1>
<?php 
    $sql = "SELECT IDFuncionario, Nome, Sobrenome, TituloCortesia, Cidade , Regiao, TelefoneResidencial, FotoCaminho, Pais
    FROM funcionarios where IDFuncionario = :id";
    $consulta = $conn->prepare($sql);
    $consulta->execute(array('id'=>$_GET['id']));
?>
<table class="table table-striped table-bordered">
    <tr>
        <td>Nome</td>
        <td>Localização</td>
        <td>Telefone</td>
        <td>Foto</td>
    </tr>
    <?php
        foreach($consulta as $linha) {
            ?>
                <tr>
                    <td><?php echo $linha['TituloCortesia'].' '.$linha['Nome'].' '.$linha['Sobrenome']; ?></td>
                    <td><?php echo $linha['Cidade']." - ".$linha['Regiao']." (".$linha['Pais'].")"; ?></td>
                    <td><?php echo $linha['TelefoneResidencial']; ?></td>
                    <td><?php echo $linha['FotoCaminho']; ?></td>
                </tr>
            <?php
        }
    ?>
</table>
<form method="post">
        <input type="submit" value="Confirmar Exclusão" class="btn btn-warning" name="deleta">
    </form>