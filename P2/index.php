<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login - P2 Fatec</title>
</head>
<body>
    <h2>Login do Sistema</h2>
    <form action="processa_login.php" method="POST">
        <label for="usuario">Usuário / E-mail:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>

    <p><a href="esqueci_senha.php">Esqueci a Senha</a></p>
</body>
</html>
