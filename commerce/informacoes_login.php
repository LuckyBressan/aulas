<?php

    $sql = "SELECT * from usuarios where id = :id";
    $info = $conn->prepare($sql);
    $info->execute(array('id'=>$_SESSION['usuario']['id']));
    
    $user = $info->fetch();
?>

<div class="info_login">
    <div class="text-center"><img src="img/userfinal.png" width="200"></div><br><br>
    <h1 class="text-center" style="text-transform:uppercase; color: #2a6f97; ">Informações de Login</h1><br><br>
    <div class="mb-3">
        <label for="login" class="form-label">Login:</label>
        <input type="text" class="form-control" name="mostra_login" id='login' value="<?php echo $user['login'] ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="senha" class="form-label">Senha:</label>
        <input type="password" class="form-control" name="mostra_senha" id='senha' value="<?php echo $user['senha'] ?>" readonly>
    </div><br>
    <a href="?pagina=logout" class="btn btn-danger" id="logar">Logout</a>
</div>