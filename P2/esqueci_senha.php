<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Recuperar Senha - P2 Fatec</title>
</head>
<body>
    <h2>Recuperação de Senha</h2>
    <form action="processa_recuperacao.php" method="POST">
        <label for="email">Digite seu e-mail de cadastro:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Recuperar Senha</button>
    </form>

    <p><a href="index.php">Voltar ao Login</a></p>
</body>
</html>
