<h3 class="text-center" style="text-transform: uppercase; color: #2a6f97">Realizar o Pedido</h3>

<?php
 if(isset($_POST['gravar'])) {
    $sql_vendas = "INSERT into vendas(usuario_id, data_venda) values (:id, now())";
    $vendas = $conn->prepare($sql_vendas);
    $vendas->execute(array('id'=>$_SESSION['usuario']['id']));

     $venda_id = $conn->lastInsertId();

     foreach($_SESSION['carrinho'] as $item) {
        $sql_item = "INSERT into vendas_produtos(venda_id, produto_id, valor_venda) values (:venda_id, :produto_id, (select valor from produtos where id = :produto_id))";
        $insert_item = $conn->prepare($sql_item);
        $insert_item->execute(array("venda_id"=>$venda_id, "produto_id"=>$item[0]));
     }
     
     unset($_SESSION['carrinho']);
 } else {
    ?>
    <form method="post">
        <div class="text-center">
            <input type="submit" class="btn btn-primary botoes-principais" name="gravar" value="Confirmar Pedido">
        </div>
    </form>
    <?php
 }
?>
