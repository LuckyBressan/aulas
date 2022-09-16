<?php 
    $sql = "SELECT p.id, p.nome, p.categoria_id, p.caracteristicas, p.valor, p.estoque, p.imagem, p.resumo, c.descricao, c.id
            FROM produtos p
            inner join categorias c on (p.categoria_id = c.id) WHERE p.id = :id";
    $produtos = $conn->prepare($sql);
    $produtos->execute(array('id'=>$_GET['id']));

    $linha = $produtos->fetch();
?>
<div class="corpo-produto">
    <div class="img-produto">
        <img  src="<?php echo $linha['imagem'] ?>" class="border rounded img-produto">
    </div><br>
    <div class="titulo-produto border shadow-sm p-3 mb-5 bg-body rounded">
        <h3 style="color: #2a6f97;"><td><?php echo $linha['nome'] ?></td></h3>
    </div>
    <div class="informacoes-produto border shadow p-3 mb-5 bg-body rounded">
        <p><?php echo $linha['caracteristicas'] ?></p>
    </div><br>
    <div class="">
        <div class="position-relative corpo-informacoes-complementares">
            <div class="position-absolute top-0 start-0 shadow p-3 mb-5 bg-body rounded text-center informacoes-complementares"><h3>R$ <?php echo $linha['valor'] ?></h3></div>
            <div class="position-absolute top-0 start-50 shadow p-3 mb-5 bg-body rounded text-center informacoes-complementares" ><h3><?php echo $linha['estoque'] ?></h3></div>
            <div class="position-absolute top-0 start-100 shadow p-3 mb-5 bg-body rounded text-center informacoes-complementares" ><h4><?php echo $linha['descricao'] ?></h4></div>
        </div>
    </div>
    
</div>
<form method="post">
    <div class="text-center botao-adicionar-carrinho">
        <input type="submit" value="Adicionar ao Carrinho" name="add_carrinho" class="btn btn-primary botoes-principais"><br><br>
        <a href="?pagina=listagem&id=<?php echo $linha['categoria_id'] ?>" class="btn btn-primary botoes-principais link link-light carrinho" style="vertical-align:text-bottom; line-height:50px; " >Voltar</a>
    </div>
</form>


