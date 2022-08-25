<form action="resultado.php" method="POST">
    <label for="login-">Login:</label>
    <input type="text" id="login-" name="login" placeholder="Seu login aqui..." size="40" maxlenght="20" >
    <br>
    Senha:
    <input type="password" name="senha" placeholder="8 dígitos...">
    <br>
    <label for="nota_1">Nota 1</label>
    <input type="radio" id="nota_1" name="nota">
    <label for="nota_2">Nota 2</label>
    <input type="radio" id="nota_2" name="nota">
    <label for="nota_3">Nota 3</label>
    <input type="radio" id="nota_3" name="nota">
    <label for="nota_4">Nota 4</label>
    <input type="radio" id="nota_4" name="nota">
    <label for="nota_5">Nota 5</label>
    <input type="radio" id="nota_5" name="nota">
    <br>
    <input type="checkbox" name="cidade[]" value="1">
    <input type="checkbox" name="cidade[]" value="2">
    <input type="checkbox" name="cidade[]" value="3">
    <input type="checkbox" name="cidade[]" value="4">
    <input type="checkbox" name="cidade[]" value="5">
    <input type="submit" value="Enviar">



</form>