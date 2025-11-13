<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function enviarEmail($para, $assunto, $mensagemHtml) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'liviasdias12@gmail.com';
        $mail->Password   = 'censurado'; //substituir pela senha do google
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->CharSet    = 'UTF-8';

        $mail->setFrom('seuemail@gmail.com', 'Sistema Fatec');
        $mail->addAddress($para);

        $mail->isHTML(true);
        $mail->Subject = $assunto;
        $mail->Body    = $mensagemHtml;

        $mail->send();
        echo "<p style='color:green'>E-mail enviado com sucesso para $para!</p>";
    } catch (Exception $e) {
        echo "<p style='color:red'>Erro ao enviar e-mail: {$mail->ErrorInfo}</p>";
    }
}
?>
