<h1>Funcionários</h1>
<?php
    $sql = "SELECT IDFuncionario, Nome, Sobrenome, TituloCortesia, Cidade , Regiao, TelefoneResidencial, FotoCaminho, Pais
            FROM funcionarios";
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();

?>

<table class="table table-striped table-bordered">
    <tr>
        <td>Nome</td>
        <td>Localização</td>
        <td>Telefone</td>
        <td>Foto</td>
        <td>Ações</td>
    </tr>
    <?php
        foreach($consulta as $linha) {
            ?>
                <tr>
                    <td><?php echo $linha['TituloCortesia'].' '.$linha['Nome'].' '.$linha['Sobrenome']; ?></td>
                    <td><?php echo $linha['Cidade']." - ".$linha['Regiao']." (".$linha['Pais'].")"; ?></td>
                    <td><?php echo $linha['TelefoneResidencial']; ?></td>
                    <td><img src="<?php echo $linha['FotoCaminho']; ?>" class="img-thumbnail" width="200"/></td>
                    <td>
                        <a href="?pagina=fun_deletar&id=<?php echo $linha['IDFuncionario'];?>" class="btn btn-danger">Deletar</a>
                        <a href="?pagina=fun_atualizar&id=<?php echo $linha['IDFuncionario']; ?>" class="btn btn-primary">Atualizar</a>
                    </td>
                </tr>
            <?php
        }
    ?>
</table>