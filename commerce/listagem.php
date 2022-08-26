<?php 
    $sql = "SELECT * from produtos where categoria_id = :id";
    $produtos = $conn->prepare($sql);
    $produtos->execute(array('id'=>$_GET['id']));
?>
<?php 
    foreach($produtos as $linha) {
        ?>
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $linha['imagem']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $linha['descricao']; ?></h5>
                    <p class="card-text"><?php echo $linha['resumo']; ?></p>
                    <a href="?pagina=listagem_p&id=<?php echo $linha['id']; ?>" class="btn btn-primary">Mais Informações</a>
                </div>
            </div>
        <?php
    }
?>