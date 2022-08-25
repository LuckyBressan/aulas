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
    if(isset($_GET['listardados'])) {
        $dados = $conn->query('select * from pessoas');

        foreach($dados as $linha) {
            print_r($linha);
        }
    }

    //listar apenas 1
    if(isset($_GET['listar1'])) {
        $stmt = $conn->prepare('select * from pessoas where codigo=:codigo');
        $stmt ->execute(array('codigo' => $_GET['listar1']));

        while($row = $stmt->fetch()) {
            print_r($row);
        }
    }

    //gravar
    if(isset($_GET['gravar'])) {
        $stmt = $conn->prepare('insert into pessoas (nome) values (:nome)');
        $stmt->execute(array('nome'=>$_GET['nome']));
    }
    //atualizar
    if(isset($_GET['atualizar'])) {
        $stmt = $conn->prepare('update pessoas set nome=:nome where codigo=:codigo');
        $stmt->execute(array('codigo'=>$_GET['codigo'],'nome'=>$_GET['nome']));
    }

    //delete
    if(isset($_GET['delete'])) {
        $stmt = $conn->prepare('delete from pessoas where codigo=:codigo');
        $stmt->execute(array('codigo'=>$_GET['codigo']));
    }
?>