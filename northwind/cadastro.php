<h1>Cadastro</h1>
<form method="post">
    <div class="mb-3">
        <input type="submit" name="produto" class="btn btn-primary" value="Produtos">&nbsp;&nbsp;
        <input type="submit" name="fornecedor" class="btn btn-info" value="Fornecedores">&nbsp;&nbsp;
        <input type="submit" name="cliente" class="btn btn-secondary" value="Cliente">&nbsp;&nbsp;
        <input type="submit" name="funcionario" class="btn btn-dark" value="Funcionário">
    </div>
</form>
<?php 
    if(isset($_POST['produto'])) {
        include "produtos/cadastro.php";
    } else if(isset($_POST['fornecedor'])) {
        include "fornecedor/cadastro_fornecedor.php";
    } else if(isset($_POST['cliente'])) {
        include "cliente/cadastro.php";
    } else if(isset($_POST['funcionario'])) {
        include "funcionario/cadastro.php";
    }
?>