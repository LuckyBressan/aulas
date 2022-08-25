<h1>Listagem de Produtos</h1>

<?php
    $sql = "SELECT p.codigo, p.nome, p.valor, pg.descricao
            FROM produtos p 
            inner join produtos_grupos pg on (p.grupo_id = pg.id)";
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();

    /*while($linha = $consulta -> fetch()) {
        print_r($linha);
        echo "<br>";
    }*/
    //$dados = $conn -> query("SELECT p.codigo, p.nome, p.valor, pg.descricao FROM produtos p inner join produtos_grupos pg on (p.grupo_id = pg.id)")

?>
<table class="table table-striped table-bordered">
    <tr>
        <td>Código</td>
        <td>Nome</td>
        <td>Valor</td>
        <td>Descrição</td>
        <td>Ações</td>
    </tr>
    <?php
        foreach($consulta as $linha) {
            ?>
                <tr>
                    <td><?php echo $linha['codigo']; ?></td>
                    <td><?php echo $linha['nome']; ?></td>
                    <td>R$ <?php echo $linha['valor']; ?></td>
                    <td><?php echo $linha['descricao']; ?></td>
                    <td>
                        <a href="?pagina=p_deletar&codigo=<?php echo $linha['codigo'];?>" class="btn btn-danger">Deletar</a>
                        <a href="?pagina=p_atualizar&codigo=<?php echo $linha['codigo']; ?>" class="btn btn-primary">Atualizar</a>
                    </td>
                </tr>
            <?php
        }
    ?>
</table>