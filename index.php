<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DEBQ 207</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index/style.css">
    <link rel="shortcut icon" href="./imagens/icon.png" type="image/x-icon">
</head>

<body>
    <div class="container login-container">
        <h2 class="text-center mb-4">DEBQ 207</h2>
        <form method="post" action="./php/login/main.php">
            <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuário" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>