<?php 
    if(isset($_POST['deleta'])) {
        $sql = "DELETE from clientes where IDCliente = :id";
        $deleta = $conn->prepare($sql);
        $deleta->execute(array('id'=>$_GET['id']));
        header('Location: ?pagina=listagem');
    }
?>
<h1>Deletar Cliente</h1>
<?php 
    $sql = "SELECT IDCliente, NomeCompanhia, NomeContato, Cidade, Regiao, Telefone, TItuloContato, Pais FROM clientes where IDCliente = :id";
    $consulta = $conn->prepare($sql);
    $consulta->execute(array('id'=>$_GET['id']));
?>
<table class="table table-striped table-bordered">
    <tr>
        <td>Nome</td>
        <td>Localização</td>
        <td>Telefone</td>
        <td>Nome do Contato</td>
        <td>Título do Contato</td>
    </tr>
    <?php
        foreach($consulta as $linha) {
            ?>
                <tr>
                    <td><?php echo $linha['NomeCompanhia']; ?></td>
                    <td><?php echo $linha['Cidade']." - ".$linha['Regiao']." (".$linha['Pais'].")"; ?></td>
                    <td><?php echo $linha['Telefone']; ?></td>
                    <td><?php echo $linha['NomeContato']; ?></td>
                    <td><?php echo $linha['TItuloContato']; ?></td>
                </tr>
            <?php
        }
    ?>
</table>
<form method="post">
        <input type="submit" value="Confirmar Exclusão" class="btn btn-warning" name="deleta">
    </form>