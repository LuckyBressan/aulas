<?php
    $valores[] = array("Cheetos",6,2);
    $valores[] = array("Doritos",10,4);
    $valores[] = array("Ruffles",7,3);
    $valores[] = array("Coca-cola",8,1);
    $valores[] = array("Hershey's",4,5);
?>
<head>
    <link rel="stylesheet" href="matriz.css">
</head>
<table border=0 id='table'>
    <tr align='center' id='linha'>
        <td>Nome</td>
        <td>Valor</td>
        <td>Quantidade</td>
        <td>Total</td>
    </tr>
    <?php
        for ($i=0;$i<count($valores);$i++) {
            echo "<tr align='center' class='linha".$i."'>";
                for ($x=0;$x<3;$x++) {
                    echo "<td>".$valores[$i][$x]."</td>";
                }
                $total = $valores [$i][1] * $valores [$i][2];
                echo "<td id='linha".$i."'> R$".$total."</td>";
            echo "</tr>";
        }
    ?>
</table>