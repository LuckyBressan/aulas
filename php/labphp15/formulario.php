<?php
    function cadastro() {
        $arquivado = fopen("cadastro.txt","w") or die ("Arquivo não encontrado");
        $cadastro[] = $_POST['nome']." | ".$_POST['telefone']." | ".$_POST['email']."\r\n";
        $novo_cadastro = implode("|",$cadastro);
        fwrite($arquivado,$novo_cadastro);
    }

?>

<form method="post">
    <label for="name">Nome:</label>
    <input type="text" name="nome" value=""><br>
    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone" value=""><br>
    <label for="email">Email:</label>
    <input type="email" name="email" value=""><br>
    <input type="submit" name="enviar" value="Enviar">
</form>

<?php 
    if(isset($_POST['enviar'])) {
        cadastro();
    }
?>