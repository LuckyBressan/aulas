<?php
    $nome = '';
    $email = '';
    $tipo = '';
    $setor = '';
    $texto = '';
    $erro = false;

    if (isset($_POST['salvar'])) {
        if (empty($_POST['nome'])) {
            $erro = true;
            echo "O nome não foi informada!<br>";
        }
        if (empty($_POST['email'])) {
            $erro = true;
            echo "O Email não foi informado!<br>";
        }
        if (empty($_POST['tipo'])) {
            $erro = true;
            echo "O tipo de contato não foi informado!<br>";
        }
        if (empty($_POST['setor'])) {
            $erro = true;
            echo "O setor não foi informado!<br>";
        }
        if (empty($_POST['texto'])) {
            $erro = true;
            echo "O texto não foi informado!<br>";
        }

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $tipo = $_POST["tipo"];
        $setor = $_POST["setor"];
        $texto = $_POST["texto"];

        if (!$erro) {
            include "resposta.php";
            exit();
        }
       

    }
?>
<link rel="stylesheet" href="formulario2.css">

<form method="POST" id="formulario">
Nome:
<input type="text" name="nome" value="<?php echo $nome; ?>"><br>
Email: 
<input type="email" name="email" value="<?php echo $email; ?>"><br>
Contato:
<input type="text" name="tipo" value="<?php echo $tipo ?>"><br>
Setor:
<input type="text" name="setor" value="<?php echo $setor ?>"><br>

<!-- texto !-->
<textarea name="texto" cols="30" rows="10" value="<?php echo $texto ?>"></textarea>
<br>
<input type="submit" name="salvar" value="Salvar">
</form>

