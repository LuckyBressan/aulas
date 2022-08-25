<?php 
    session_start();

    if (isset($_POST['enviar'])) {
        $_SESSION['nome'] = $_POST['nome'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['telefone'] = $_POST['telefone'];
    }    
    if(isset($_POST['limpar'])) {
        $_SESSION['nome'] = "";
        $_SESSION['email'] = "";
        $_SESSION['telefone'] = "";
    }
?>

<h1>Formulário</h1>

<form method="POST">
    Nome: <br>
    <input type="text" name="nome" value = "<?php echo $_SESSION['nome'] ?>"><br>
    E-mail: <br>
    <input type="email" name="email" value = "<?php echo $_SESSION['email'] ?>"> <br>
    Telefone: <br>
    <input type="text" name="telefone" value = "<?php echo $_SESSION['telefone'] ?>"><br>
    <input type="submit" name="enviar" value="Enviar">
    <input type="submit" name="limpar" value="Limpar">
</form>

<?php 
    echo "<br>As informações inseridas foram:<br>";
    echo "Nome: ".$_SESSION['nome']."<br>";
    echo "E-mail: ".$_SESSION['email']."<br>";
    echo "Telefone: ".$_SESSION['telefone']."<br>";
?>