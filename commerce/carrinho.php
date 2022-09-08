
<?php
    if(isset($_SESSION['carrinho'])) {
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Foto</th>
      <th scope="col">Descrição</th>
      <th scope="col">Valor</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $carrinho = array_keys($_SESSION['carrinho']);
        foreach($carrinho as $item){
            $sql = "SELECT * from produtos where id = :id";
            $produto = $conn->prepare($sql);
            $produto->execute(['id' => $_SESSION['carrinho'][$item]]);
            $produto = $produto->fetch();
            ?>
            <tr>
                
                <td><img src="<?php echo $produto['imagem'] ?>" class="img-thumbnail" width="150" alt=""></td>
                <td><?php echo "<h4 style='color: #2a6f97'>".$produto['descricao'].'</h4><br>'. $produto['resumo']."" ?></td>
                <td><?php echo $produto['valor'] ?></td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="produto" value="<?php echo $item; ?>">
                        <input type="submit" class="btn btn-primary" style="background-color: #2a6f97; border:#2a6f97" name="remover_carrinho" value="Remover">
                    </form>
                </td>
            </tr>
        <?php    
        } 
    ?>
  </tbody>
</table>
<hr>
<form method="post">
    <div class="text-center">
        <a href="" class="btn btn-primary" style="background-color: #2a6f97; border:#2a6f97; width: 30%; height: 69px; text-align:center; vertical-align:bottom; line-height: 53px;">Finalizar Compra</a><br><br>
        <input type="submit" value="Limpar Carrinho" name="del_carrinho" class="btn btn-primary" style="background-color: #2a6f97; border:#2a6f97; width: 30%; height: 60px;">
    </div>
</form>
<?php 
    } else {
        echo "<h3>Você não tem produtos no carrinho</h3>";
    }
?>