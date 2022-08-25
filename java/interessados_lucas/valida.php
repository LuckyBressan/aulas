<?php
    include "index.html";
    
    if (isset($_POST['gravar'])) {
        $nome = $_POST['iNome'];
        $email = $_POST['iEmail'];
        $fone = $_POST['iFone'];
        
        if($nome == "") {
            echo "<div class='alert alert-warning'>NOME É OBRIGATÓRIO</div>";
        }

    }
?>