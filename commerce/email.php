<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->SMTPAuth = true;
$mail->Username = 'reidelaslukinha061@gmail.com';
$mail->Password = 'jhqtlzxqfkvpqekl';
$mail->setFrom('lucas.a.dos.s.bressan@gmail.com', 'Lucas Adriano');
$mail->addAddress('lucas.bressan@unidavi.edu.br', 'Lucas Programador');
$mail->Subject = 'E-mail referente ao pedido ID #' . $venda_id;
$mail->msgHTML(file_get_contents('email.html'), __DIR__);
$mail->AltBody = 'E-mail enviado em HTML';
//$mail->addAttachment('imagens/redmi_note_10s.png');

if (!$mail->send()) {
    echo 'Erro ao enviar e-mail: ' . $mail->ErrorInfo;
} else {
    ?>
    <script>
        window.location.replace("http://localhost/git/aulas/commerce/index.php?pagina=meus_pedidos");
    </script>
    <?php
}