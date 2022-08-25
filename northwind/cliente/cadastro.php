<?php 
    if(isset($_POST['salvar'])) {
        $sql = "INSERT into clientes(NomeCompanhia, NomeContato, TituloContato, Cidade, Regiao, Pais, Telefone) values (:companhia, :contato, :titulo, :cidade, :regiao, :pais,
                :telefone);";
        $cliente = $conn->prepare($sql);
        if($cliente->execute(array('companhia'=>$_POST['companhia'], 'contato'=>$_POST['contato'], 'titulo'=>$_POST['titulo'], 'cidade'=>$_POST['cidade'], 'regiao'=>$_POST['regiao'], 
        'pais'=>$_POST['pais'],'telefone'=>$_POST['telefone']))) {
           echo '<div class="alert alert-success">Dados Cadastrados com Sucesso</div>';
        }
    }
?>
<h1>Cliente</h1>
<form method="post">
        <input type="hidden" name="cliente">
        <div class="mb-3">
            <label for="companhia" class="form-label">Nome da Companhia:</label>
            <input type="text" name="companhia" id="companhia" class="form-control" placeholder="Informe a Companhia...">
        </div>
        <div class="mb-3">
            <label for="contato" class="form-label">Nome do Contato:</label>
            <input type="text" name="contato" id="contato" class="form-control" placeholder="Informe o Nome do Contato...">
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Título do Contato:</label>
            <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Informe o Título do Contato...">
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Informe o Telefone...">
        </div>
        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade:</label>
            <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Informe a Cidade...">
        </div>
        <div class="mb-3">
            <label for="regiao" class="form-label">Região:</label>
            <input type="text" name="regiao" id="regiao" class="form-control" placeholder="Informe a Região...">
        </div>
        <div class="mb-3">
            <label for="pais" class="form-label">País:</label>
            <input type="text" name="pais" id="pais" class="form-control" placeholder="Informe o País...">
        </div>
        <div class="mb-3">
            <input type="submit" name="salvar" class="btn btn-primary" value="Cadastrar">
        </div>
</form>