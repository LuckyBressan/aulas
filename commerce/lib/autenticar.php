<?php
    if(isset($_POST['logar']) && !empty("login") & !empty("senha")) {
        $sql = "SELECT * from usuarios where login = :login and senha = md5(:senha)";
        $consulta = $conn->prepare($sql);
        $consulta->execute(array('login'=>$_POST['login'], 'senha'=>$_POST['senha']));
        $usuario = $consulta->fetch(); 
        if($consulta->rowCount()>0) {
            if($usuario['login'] == $_POST['login']) {
                $_SESSION['logado'] = true;
                $_SESSION['usuario'] = $usuario;
            }
        } else {
            echo 'Usuário encontrado';
        }
    }
?>