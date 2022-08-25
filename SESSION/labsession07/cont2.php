<?php 
    session_start();

    if (isset($_POST['limpar'])) {
        session_destroy();
        header("Location: /lucas/labsession07/");
    }

    if (!isset($_SESSION['MKT'])) {
        $_SESSION['MKT']['email'] = 0;
        $_SESSION['MKT']['sms'] = 0;
    }

    if (isset($_GET['c']) && $_GET['c'] == 'email') {
        $_SESSION['MKT']['email']++;
    }
    if (isset($_GET['c']) & $_GET['c']=='sms') {
        $_SESSION['MKT']['sms']++;
    }
?>

<h3>O link do E-mail foi clicado: <?php echo $_SESSION['MKT']['email'];?> vezes </h3>
<h3>O link do SMS foi clicado: <?php echo $_SESSION['MKT']['sms'];?> vezes </h3>

<form method="POST">
    <input type="submit" name="limpar" value="Limpar">
</form>

<a href="index.php">Voltar</a>