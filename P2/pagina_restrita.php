<?php
$user = $_GET['user'] ?? 'Visitante';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Área Restrita</title>
</head>
<body>
    <h2>Bem-vindo(a), <?php echo htmlspecialchars($user); ?>!</h2>
    <p>Você acessou a área restrita do sistema.</p>
    <a href="index.php">Sair</a>
</body>
</html>
