<?php 
    $sql = "SELECT * from produtos where categoria_id = :id";
    $produtos = $conn->prepare($sql);
    $produtos->execute(array('id'=>$_GET['id']));
?>
<div class="row">
    <?php
        foreach($produtos as $linha) {
            ?>
                <div class="card" style="width: 18rem; border: 1px solid #89c2d9">
                    <img src="<?php echo $linha['imagem']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #2a6f97;"><?php echo $linha['descricao']; ?></h5>
                        <p class="card-text" style="color: #01497c;"><?php echo $linha['resumo']; ?></p>
                        <a href="?pagina=produtos/listagem&id=<?php echo $linha['id']; ?>" style="background-color: #89c2d9; color: white;" class="btn">Mais Informações</a>
                    </div>
                </div>
            <?php
        }
    ?>
</div>