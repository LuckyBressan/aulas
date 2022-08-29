<?php 
    $sql = "SELECT * from produtos where id = :id";
    $produtos = $conn->prepare($sql);
    $produtos->execute(array('id'=>$_GET['id']));

    $linha = $produtos->fetch();
?>
<div class="text-center border" style="border: 1px solid #89c2d9;">
    <img  src="<?php echo $linha['imagem'] ?>" height="400">
</div><br>
<div class="text-center">
    <h3 style="color: #2a6f97;"><td><?php echo $linha['descricao'] ?></td></h3>
</div><br>


<table class="table table-striped table-bordered">
    <tr style="background-color: #a9d6e5;">
        <td style="color: white; text-transform:uppercase;"><b>Código</b></td>
        <td style="color: white;"><b><?php echo $linha['id'] ?></b></td>
    </tr>
    <tr>
        <td style="text-transform:uppercase;">Características</td>
        <td><?php echo $linha['caracteristicas'] ?></td>
    </tr>
    <tr style="background-color: #a9d6e5;">
        <td style="color: white; text-transform:uppercase;"><b>Valor</b></td>
        <td style="color: white;"><b>R$ <?php echo $linha['valor'] ?></b></td>
    </tr>
        <td style="text-transform:uppercase ;">Estoque</td>
        <td><?php echo $linha['estoque'] ?></td>
    </tr>

</table>