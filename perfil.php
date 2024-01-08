<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEBQ 207 | Perfil</title>
    <link rel="shortcut icon" href="./imagens/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estatistico/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <form method="post" action="./php/perfil/main.php">
        
        <h2><a href="./home.php"><i class="bi bi-house"></i></a> | Perfil | <?php echo $_SESSION['igreja'] ?></h2>
        <div class="form-group" hidden>
            <label for="input1">Número de membros da Igreja Local:</label>
            <input type="text" class="form-control" name="codigo" value="<?php echo $_SESSION['codigo'] ?>" required>
        </div>
        <div class="form-group">
            <label for="input1">Número de membros da Igreja Local:</label>
            <input type="text" class="form-control" name="membros" id="membros" value="0" required>
        </div>
        <div class="form-group">
            <label for="input2">Número de alunos matriculados:</label>
            <input type="text" class="form-control" name="alunos" id="alunos" value="0" required>
        </div>
        <div class="form-group">
            <label for="input3">Número de professores:</label>
            <input type="text" class="form-control" name="professores" id="professores" value="0" required>
        </div>
        <div class="form-group">
            <label for="input4">Número da equipe de apoio:</label>
            <input type="text" class="form-control" name="equipe" id="equipe" value="0" required>
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./js/perfil/main.js"></script>
</body>

</html>