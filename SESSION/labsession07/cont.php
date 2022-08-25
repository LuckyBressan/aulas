<?php 
    session_start();

    if ($_GET['c']=='Email') {
        if ($_SESSION['i']==0) {
            $_SESSION['MKT'] = array();
        }
        $_SESSION['MKT'][$_SESSION['i']] = 'Email';
        $_SESSION['email']++;
        $_SESSION['i']++;
    }
    if ($_GET['c']=='SMS') {
        if ($_SESSION['i']==0) {
            $_SESSION['MKT'] = array();
        }
        $_SESSION['MKT'][$_SESSION['i']] = 'SMS';
        $_SESSION['SMS']++;
        $_SESSION['i']++;
    }
    if (isset($_POST['limpar'])) {
        $_SESSION['MKT'] = "";
        $_SESSION['email'] = "";
        $_SESSION['SMS'] = "";
    }
?>

<h3>O link do E-mail foi clicado: <?php echo $_SESSION['email'];?> vezes </h3>
<h3>O link do SMS foi clicado: <?php echo $_SESSION['SMS'];?> vezes </h3>

<form method="POST">
    <input type="submit" name="limpar" value="Limpar">
</form>

<a href="index.php">Voltar</a>