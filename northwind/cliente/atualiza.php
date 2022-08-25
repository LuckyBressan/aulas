<?php 
    if(isset($_POST['atualizar'])) {
        $sql = "UPDATE clientes set NomeCompanhia =:companhia, NomeContato = :contato, TituloContato = :titulo, Cidade= :cidade, Regiao = :regiao, Pais=:pais, Telefone = :telefone
        where IDCliente = :id";
        $atualiza = $conn->prepare($sql);
        if($atualiza->execute(array('companhia'=>$_POST['companhia'], 'contato'=>$_POST['contato'], 'titulo'=>$_POST['titulo'], 'cidade'=>$_POST['cidade'], 'regiao'=>$_POST['regiao'], 
                    'pais'=>$_POST['pais'],'telefone'=>$_POST['telefone'], 'id'=>$_GET['id']))) {
            echo '<div class="alert alert-success">Dados Atualizados com Sucesso</div>';
        }
    }
?>

<h1>Atualizar Cliente</h1>
<?php 
    $sql = "SELECT IDCliente, NomeCompanhia, NomeContato, Cidade, Regiao, Telefone, TituloContato, Pais FROM clientes where IDCliente = :id";
    $consulta = $conn->prepare($sql);
    $consulta->execute(array('id'=>$_GET['id']));

    $linha = $consulta->fetch();
?>
<form method="post">
        <input type="hidden" name="cliente">
        <div class="mb-3">
            <label for="companhia" class="form-label">Nome da Companhia:</label>
            <input type="text" name="companhia" id="companhia" class="form-control" value="<?php echo $linha['NomeCompanhia']; ?>">
        </div>
        <div class="mb-3">
            <label for="contato" class="form-label">Nome do Contato:</label>
            <input type="text" name="contato" id="contato" class="form-control" value="<?php echo $linha['NomeContato']; ?>">
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Título do Contato:</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo $linha['TituloContato']; ?>">
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control" value="<?php echo $linha['Telefone']; ?>">
        </div>
        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade:</label>
            <input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo $linha['Cidade']; ?>">
        </div>
        <div class="mb-3">
            <label for="regiao" class="form-label">Região:</label>
            <input type="text" name="regiao" id="regiao" class="form-control" value="<?php echo $linha['Regiao']; ?>">
        </div>
        <div class="mb-3">
            <label for="pais" class="form-label">País:</label>
            <input type="text" name="pais" id="pais" class="form-control" value="<?php echo $linha['Pais']; ?>">
        </div>
        <div class="mb-3">
            <input type="submit" name="atualizar" class="btn btn-success" value="Atualizar">
        </div>
</form>