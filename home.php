<?php

session_start();

if (!isset($_SESSION['id'])) {
    header("location: index.php"); // redireciona para a página de login se não houver sessão
    exit();
}

?>
<!doctype html>
<html lang="pt-br" class="h-100" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>DEBQ 207 | Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="./bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/home/style.css">
    <link href="cover.css" rel="stylesheet">
    <link rel="shortcut icon" href="./imagens/icon.png" type="image/x-icon">
</head>

<body class="d-flex h-100 text-center text-bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">DEBQ 207</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link fw-bold py-1 px-0" href="./perfil.php">Perfil</a>
                    <a class="nav-link fw-bold py-1 px-0" href="./estatistico.html">Fazer Relatório</a>
                    <a class="nav-link fw-bold py-1 px-0" href="./relatorio.php">Listar Relatórios</a>
                    <a class="nav-link fw-bold py-1 px-0" href="./php/logout/main.php">Sair</a>
                </nav>
            </div>
        </header>

        <main class="px-3">
            <h1>Comprovante</h1>
            <p class="lead">Você pode anexar o comprovante da taxa mensal da DEBQ clicando abaixo.</p>
            <p class="lead">
                <a href="./comprovante.html" class="btn btn-lg btn-light fw-bold border-white bg-white">Enviar
                    Comprovante</a>
            </p>
        </main>

        <footer class="mt-auto text-white-50">
            <p id="igreja">Igreja do Evangelho Quadrangular</p>
        </footer>
    </div>
    <script src="./bootstrap.bundle.min.js"></script>

</body>

</html>

