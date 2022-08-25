<?php
    include "cep.php";

    echo $postalCodes [$_GET['cep']]['address'];
    echo "<br>";
    echo $postalCodes [$_GET['cep']]['city'];
    echo "<br>";
    echo $postalCodes [$_GET['cep']]['state'];

?>