<?php
$emailsValidos = ['liviasdias12@gmail.com', 'marcos.sousa12@fatec.sp.gov.br'];

$email = $_POST['email'] ?? '';

if (in_array($email, $emailsValidos)) {
    $novaSenha = "Fatec2025SI";

    $assunto = "Recuperação de Senha - Sistema Fatec";
    $mensagem = "
        <h3>Sua senha foi resetada com sucesso!</h3>
        <p>Nova senha temporária: <strong>$novaSenha</strong></p>
    ";

    include 'enviar_email.php';
    enviarEmailSimulado($email, $assunto, $mensagem);

    echo "<h3 style='color:green'>E-mail de recuperação enviado com sucesso!</h3>";
    echo "<p><a href='index.php'>Voltar ao Login</a></p>";
} else {
    echo "<h3 style='color:red'>E-mail não encontrado!</h3>";
    echo "<p><a href='esqueci_senha.php'>Tentar novamente</a></p>";
}
?>
