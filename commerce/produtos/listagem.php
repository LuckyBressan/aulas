<?php 
    $sql = "SELECT * from produtos where id = :id";
    $produtos = $conn->prepare($sql);
    $produtos->execute(array('id'=>$_GET['id']));

    $linha = $produtos->fetch();
?>
<div class="text-center border">
    <img  src="<?php echo $linha['imagem'] ?>" height="400">
</div><br>
<div class="text-center">
    <h3><td><?php echo $linha['descricao'] ?></td></h3>
</div><br>


<table class="table table-striped table-bordered">
    <tr>
        <td>Código</td>
        <td><?php echo $linha['id'] ?></td>
    </tr>
    <tr>
        <td>Características</td>
        <td><?php echo $linha['caracteristicas'] ?></td>
    </tr>
    <tr>
        <td>Valor</td>
        <td>R$ <?php echo $linha['valor'] ?></td>
    </tr>
        <td>Estoque</td>
        <td><?php echo $linha['estoque'] ?></td>
    </tr>

</table>