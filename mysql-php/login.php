<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/logue.css">
    <title>Login</title>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="tela-login">
        <h1>Login</h1>
        <form action="testeLogin.php" method="POST">
        <input type="text" name="login" placeholder="Login">
        <br> <br>
        <input type="password" name="senha" placeholder="Senha">
        <br> <br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>