<?php 
    session_start();
    
    echo $_SESSION['nome'];
?>
<br>
<a href="session.php?nome=<?php echo $_SESSION['nome']; ?>">Voltar</a>