<h1>Fornecedores</h1>
<?php
    $sql = "SELECT f.IDFornecedor, f.NomeCompanhia, f.NomeContato, f.Cidade, f.Regiao, f.Telefone, f.TItuloContato, f.Pais
            FROM fornecedores f";
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();
?>

<table class="table table-striped table-bordered">
    <tr>
        <td>ID Fornecedor</td>
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
                    <td><?php echo $linha['IDFornecedor']; ?></td>
                    <td><?php echo $linha['NomeCompanhia']; ?></td>
                    <td><?php echo $linha['Cidade']." - ".$linha['Regiao']." (".$linha['Pais'].")"; ?></td>
                    <td><?php echo $linha['Telefone']; ?></td>
                    <td><?php echo $linha['NomeContato']; ?></td>
                    <td><?php echo $linha['TItuloContato']; ?></td>
                    <td>
                        <a href="?pagina=f_deletar&ID=<?php echo $linha['IDFornecedor'];?>" class="btn btn-danger">Deletar</a>
                        <a href="?pagina=f_atualizar&ID=<?php echo $linha['IDFornecedor']; ?>" class="btn btn-primary">Atualizar</a>
                    </td>
                </tr>
            <?php
        }
    ?>
</table>