<?php 
    //conexão
    $username = 'root';
    $password = '';

    try {
        $conn = new PDO('mysql:host=localhost;dbname=aula', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: '.$e->getMessage();
    }

    //listartodos
    $dados = $conn->query('select * from salgadinho');
?>
<link rel="stylesheet" href="php+bdd/estilo.css">
<table border="1" class="table">
    <tr>
        <td><strong>CÓDIGO</strong></td>
        <td><strong>NOME</strong></td>
    </tr>


    <?php 
        foreach($dados as $coluna) {
            ?>
                <tr>
                    <td><?php echo $coluna['codigo']; ?></td>
                    <td><?php echo $coluna['nome']; ?></td>
                </tr>
            <?php
        }
    ?>
</table>