<h1>Meus Pedidos: <?php echo $_SESSION['usuario']['login'] ?></h1>


<?php
    $sql_pedidos = "SELECT * from vendas where usuario_id = :usuario_id";
    $pedidos = $conn->prepare($sql_pedidos);
    $pedidos->execute(array('usuario_id'=>$_SESSION['usuario']['id']));

    while($linha = $pedidos->fetch()) {
        echo "<h5>#".$linha['id']." - ".$linha['data_venda']."</h5>";


        $sql_itens = "SELECT * from vendas_produtos v inner join produtos p on(p.id = v.produto_id) where v.venda_id = :venda_id";
        $item = $conn->prepare($sql_itens);
        $item->execute(array('venda_id'=>$linha['id']));
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $total = 0;
            while($linha_item = $item->fetch()) { 
                $total += $linha_item['valor'];
                ?>
                <tr>
                    <th scope="row"><?php echo $linha_item['id']; ?></th>
                    <td><?php echo $linha_item['produto_id']; ?></td>
                    <td><?php echo $linha_item['nome']; ?></td>
                    <td><?php echo $linha_item['valor']; ?></td>
                </tr>
                <?php
            }
            ?>
            <tr>
                <td>
                    Total: <?php echo $total; ?>
                </td>
            </tr>
            <br>
            </tbody>
        </table>
        <?php
    }

?>