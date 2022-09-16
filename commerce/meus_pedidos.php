<h1>Meus Pedidos: <?php echo $_SESSION['usuario']['login'] ?></h1>


<?php
    $sql_pedidos = "SELECT * from vendas where usuario_id = :usuario_id";
    $pedidos = $conn->prepare($sql_pedidos);
    $pedidos->execute(array('usuario_id'=>$_SESSION['usuario']['id']));

    while($linha = $pedidos->fetch()) {
        print_r(($linha));
        echo '<br>';
    }

?>