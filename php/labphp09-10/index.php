<?php 
    //Lab 09
    $elementos = array("Lágrimas de Diamante","Físico","R$ 65,00");
    $jun_elementos = implode(" | ",$elementos);
    print $jun_elementos;

    //Lab 10
    $array_elementos = explode(" ",$jun_elementos);
    echo "<br>";
    print_r($array_elementos);
?>