<?php
    //echo 'Aqui está mais informações de debug: ';
    if(isset($_POST['salvar'])) {
        $uploadir = 'arquivos/';
        $uploadfile = $uploadir . floor(microtime(true) * 1000) . " - " . basename($_FILES['userfile']['name']);

        echo '<pre>';
        if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
            echo 'Upload success!!!';
            echo "<img src='".$uploadfile."' width='200'>";
        } else {
            echo 'Deu ruim';
        }
    }
?>

<form method="POST" enctype="multipart/form-data">
    Enviar esse arquivo
    <input name="userfile" type="file">
    <input type="submit" value="Enviar Arquivo" name="salvar">
</form>