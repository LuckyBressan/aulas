<?php 
    include "cep.php";

    $cep = '0';

    if (isset($_POST['salvar'])) {
        if (isset($_POST['cep'])) {
            $cep = $_POST['cep'];
        }
    }
  
?>

<form method="post">
    CEP:
    <input type="text" name="cep" value="<?php echo $cep; ?>"> <br>
    <input type="submit" name="salvar" value="Salvar">
</form>
<?php
    if (isset($_POST['cep'])) {
        echo $postalCodes[$cep]['address'], "<br>";
        echo $postalCodes[$cep]['city'], "<br>";
        echo $postalCodes[$cep]['state'];
    }
?>

