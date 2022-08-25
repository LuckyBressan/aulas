<?php
    include "lib/conexao.php";
    if(isset($_POST['gravar'])) {
        $sql = "INSERT into interessados values (:email,:nome,:fone, :estado, :cidade)";
        $consulta = $conn->prepare($sql);
        $consulta->execute(array('nome'=>$_POST['iNome'],'email'=>$_POST['iEmail'], 'fone'=>$_POST['iFone'],'estado'=>$_POST['sEstado'], 'cidade'=>$_POST['sCidade']));
        header("Location: index.html");
    } else {
        header("Location: index.html");
    }
?>
