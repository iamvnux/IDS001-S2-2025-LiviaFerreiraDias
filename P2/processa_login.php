<?php
date_default_timezone_set('America/Sao_Paulo');

$usuarios = [
    'liviasdias12@gmail.com' => '12345',
    'marcos.sousa12@fatec.sp.gov.br' => 'senha123'
];

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $senha) {

    $dataHora = date('d/m/Y H:i:s');
    $destinatario = "marcos.sousa12@fatec.sp.gov.br";
    $assunto = "Acesso bem-sucedido ao Sistema";
    $mensagem = "O usuário $usuario acessou o sistema em $dataHora.";

    include 'enviar_email.php';
    enviarEmailSimulado($destinatario, $assunto, $mensagem);

    header("Location: pagina_restrita.php?user=" . urlencode($usuario));
    exit;
} else {
    echo "<h3>Usuário ou senha inválidos!</h3>";
    echo "<a href='index.php'>Voltar</a>";
}
?>
