<?php 
    session_start();

    if (isset($_POST['enviar'])) {
        if ($_SESSION["i"]==0) {
            $_SESSION['nome'] = array();
            $_SESSION['valor'] = array();
            $_SESSION['qtd'] = array();
            $_SESSION['categoria'] = array();
        }
        $_SESSION['nome'][$_SESSION["i"]] = $_POST['nome'];
        $_SESSION['valor'][$_SESSION["i"]] = $_POST['valor'];
        $_SESSION['qtd'][$_SESSION["i"]] = $_POST['qtd'];
        $_SESSION['categoria'][$_SESSION["i"]] = $_POST['categoria'];
        $_SESSION["i"]++;
    }
    if (isset($_POST['limpar'])) {
        $_SESSION['nome'] = "";
        $_SESSION['valor'] = "";
        $_SESSION['qtd'] ="";
        $_SESSION['categoria'] = "";
        $_SESSION["i"]=0;
    }
    if (isset($_POST['alterar'])) {
        
    }

?>

<form method="POST">
    <label for="nome">NOME:</label>
    <input type="text" name="nome" value="<?php echo $_SESSION['nome'][$_SESSION["i"]-1]; ?>"><br>
    <label for="valor">VALOR:</label>
    <input type="number" name="valor" value="<?php echo $_SESSION['valor'][$_SESSION["i"]-1]; ?>"><br>
    <label for="qtd">QTD. ESTOQUE:</label>
    <input type="number" name="qtd" value="<?php echo $_SESSION['qtd'][$_SESSION["i"]-1]; ?>"><br>
    <label for="categoria">CATEGORIA:</label>
    <input type="text" name="categoria" value="<?php echo $_SESSION['categoria'][$_SESSION["i"]-1]; ?>"><br>
    <input type="submit" name="enviar" value="Enviar">
    <input type="submit" name="limpar" value="Limpar"><br>

<?php 
    echo "<table border=1>";
    echo "<tr>";
    echo "<td>NOME</td>";
    echo "<td>VALOR</td>";
    echo "<td>QUANTIDADE DE ESTOQUE</td>";
    echo "<td>CATEGORIA</td>";
    echo "</tr>";
    for ($x=0;$x<$_SESSION["i"];$x++) {
        echo "<tr>";
        echo "<td>".$_SESSION['nome'][$x]."</td>";
        echo "<td>".$_SESSION['valor'][$x]."</td>";
        echo "<td>".$_SESSION['qtd'][$x]."</td>";
        echo "<td>".$_SESSION['categoria'][$x]."</td>";
        echo "<td><input type='submit' name='alterar' value='Alterar'></td>";
        echo "</tr>";
    }
    echo "</table>";

?>
</form>