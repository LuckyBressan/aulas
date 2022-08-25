<h1>Clientes</h1>
<?php
    $sql = "SELECT IDCliente, NomeCompanhia, NomeContato, Cidade, Regiao, Telefone, TituloContato, Pais
            FROM clientes";
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();
?>

<table class="table table-striped table-bordered">
    <tr>
        <td>Nome</td>
        <td>Localização</td>
        <td>Telefone</td>
        <td>Nome do Contato</td>
        <td>Título do Contato</td>
        <td>Ações</td>
    </tr>
    <?php
        foreach($consulta as $linha) {
            ?>
                <tr>
                    <td><?php echo $linha['NomeCompanhia']; ?></td>
                    <td><?php echo $linha['Cidade']." - ".$linha['Regiao']." (".$linha['Pais'].")"; ?></td>
                    <td><?php echo $linha['Telefone']; ?></td>
                    <td><?php echo $linha['NomeContato']; ?></td>
                    <td><?php echo $linha['TituloContato']; ?></td>
                    <td>
                        <a href="?pagina=c_deletar&id=<?php echo $linha['IDCliente'];?>" class="btn btn-danger">Deletar</a>
                        <a href="?pagina=c_atualizar&id=<?php echo $linha['IDCliente']; ?>" class="btn btn-primary">Atualizar</a>
                    </td>
                </tr>
            <?php
        }
    ?>
</table>