<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Php</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="container">
        <form action="register_action.php" method="post">
            <label for="username">Digite seu nome</label>
            <input type="text" name="username" id="username" required>

            <label for="email">Digite seu email</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Digite sua senha</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>

</html>