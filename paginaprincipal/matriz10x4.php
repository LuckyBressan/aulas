<?php
for ($i=0;$i<10;$i++) {
    for ($x=0;$x<4;$x++) {
        $mat[$i][$x] = rand(0,100);
    }
}
?>
<head>
    <link rel="stylesheet" href="matriz10x4.css">
</head>
<table border=0 id='table'>
    <?php
        for ($i=0;$i<10;$i++) { 
            echo "<tr class='linha".$i."'>";
            for ($x=0;$x<4;$x++) {
                echo "<td> Posição ".$x." - ".$i." - ".$mat[$i][$x]."</td>";
            }
            echo "</tr>";
        }
    ?>
</table>