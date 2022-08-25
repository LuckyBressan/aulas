<h1>Produtos</h1>

<?php
    $sql = "SELECT p.IDProduto, p.NomeProduto, p.PrecoUnitario, p.UnidadesEmEstoque, c.NomeCategoria, f.NomeCompanhia
            FROM produtos p 
            inner join fornecedores f on (p.IDFornecedor = f.IDFornecedor)
            inner join categorias c on (p.IDCategoria = c.IDCategoria)";
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();
?>

<table class="table table-striped table-bordered">
    <tr>
        <td>ID Produto</td>
        <td>Nome</td>
        <td>Preço Unitário</td>
        <td>Estoque</td>
        <td>Categoria</td>
        <td>Fornecedora</td>
        <td>Ações</td>
    </tr>
    <?php
        foreach($consulta as $linha) {
            ?>
                <tr>
                    <td><?php echo $linha['IDProduto']; ?></td>
                    <td><?php echo $linha['NomeProduto']; ?></td>
                    <td>R$ <?php echo $linha['PrecoUnitario']; ?></td>
                    <td><?php echo $linha['UnidadesEmEstoque']; ?></td>
                    <td><?php echo $linha['NomeCategoria']; ?></td>
                    <td><?php echo $linha['NomeCompanhia']; ?></td>
                    <td>
                        <a href="?pagina=p_deletar&ID=<?php echo $linha['IDProduto'];?>" class="btn btn-danger">Deletar</a>
                        <a href="?pagina=p_atualizar&ID=<?php echo $linha['IDProduto']; ?>" class="btn btn-primary">Atualizar</a>
                    </td>
                </tr>
            <?php
        }
    ?>
</table>