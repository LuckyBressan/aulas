<?php
    if(isset($_POST['logar']) & !empty($_POST['login']) & !empty($_POST['senha'])) {

        $sql = "SELECT * from usuarios where login = :login and senha = md5(:senha)";
        $consulta = $conn->prepare($sql);
        $consulta->execute(array('login'=>$_POST['login'], 'senha'=>$_POST['senha']));
        $usuario = $consulta->fetch(); 
        if($consulta->rowCount()>0) {
            if($usuario['login'] == $_POST['login']) {
                $_SESSION['logado'] = true;
                $_SESSION['usuario'] = $usuario;
                header('Location: ?pagina=home');
            }
        } else {
            echo 'Usuário encontrado';
        }
    }
?>

<form method="POST">
    <div class="pg_login">
        <div class="text-center"><img src="img/userfinal.png" width="100"></div><br>
        <h5 class="text-center">login do cliente</h5>
        <p class="text-center">Veja seus pedidos de forma fácil, compre mais rápido e tenha uma experiência personalizada :)</p>
        <div class="mb-3">
            <label for="login" class="form-label">Login:</label>
            <input type="text" class="form-control" id="login" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" id="logar" value="Logar">
        </div>
    </div>
</form>

