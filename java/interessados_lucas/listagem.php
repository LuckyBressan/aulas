<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Listagem</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
<?php
    include "lib/conexao.php";
    $sql = "SELECT * FROM interessados";
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();
?>
<table class="table table-striped table-bordered">
    <tr>
        <td>Nome</td>
        <td>Email</td>
        <td>Fone</td>
        <td>Estado</td>
        <td>Cidade</td>
    </tr>
    <?php
        foreach($consulta as $linha) {
            ?>
                <tr>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['email']; ?></td>
                    <td><?php echo $linha['fone']; ?></td>
                    <td><?php echo $linha['estado']; ?></td>
                    <td><?php echo $linha['cidade']; ?></td>
                </tr>
            <?php
        }
    ?>
</table>
<form action="index.html">
    <input type="submit" value="Cadastro" name="cadastro" class="btn btn-primary">
</form>