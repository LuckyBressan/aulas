<?php 
    $sql = "SELECT * from produtos where id = :id";
    $produtos = $conn->prepare($sql);
    $produtos->execute(array('id'=>$_GET['id']));

    $linha = $produtos->fetch();
?>
<div class="corpo-produto">
    <div class="img-produto">
        <img  src="<?php echo $linha['imagem'] ?>" class="border rounded img-produto">
    </div><br>
    <div class="titulo-produto border shadow-sm p-3 mb-5 bg-body rounded">
        <h3 style="color: #2a6f97;"><td><?php echo $linha['descricao'] ?></td></h3>
    </div>
    <div class="informacoes-produto border shadow p-3 mb-5 bg-body rounded">
        <p><?php echo $linha['caracteristicas'] ?></p>
    </div><br>
    <div class="">
        <div class="position-relative corpo-informacoes-complementares">
            <div class="position-absolute top-0 start-0 shadow p-3 mb-5 bg-body rounded text-center informacoes-complementares"><h3>R$ <?php echo $linha['valor'] ?></h3></div>
            <div class="position-absolute top-0 start-50 shadow p-3 mb-5 bg-body rounded text-center informacoes-complementares" ><h3><?php echo $linha['estoque'] ?></h3></div>
            <div class="position-absolute top-0 start-100 shadow p-3 mb-5 bg-body rounded text-center informacoes-complementares" ><h3><?php echo $linha['valor'] ?></h3></div>
        </div>
    </div>
    
</div>
<form method="post">
    <div class="text-center botao-adicionar-carrinho">
        <input type="submit" value="Adicionar ao Carrinho" name="add_carrinho" class="btn btn-primary botoes-principais">
    </div>
</form>

<!--<table class="table table-striped table-bordered">
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

