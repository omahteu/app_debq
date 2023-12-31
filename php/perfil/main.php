<?php
session_start();

include("../core/conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $membros = mysqli_real_escape_string($conn, $_POST['membros']);
    $alunos = mysqli_real_escape_string($conn, $_POST['alunos']);
    $professores = mysqli_real_escape_string($conn, $_POST['professores']);
    $equipe = mysqli_real_escape_string($conn, $_POST['equipe']);
    $codigo = mysqli_real_escape_string($conn, $_POST['codigo']);

    $sql = "UPDATE perfis SET membros='$membros', alunos='$alunos', professores='$professores', equipe='$equipe' WHERE codigo='$codigo'";
    $result = $conn->query($sql);

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Perfil Atualizado!'); window.location.href = '../../perfil.php';</script>";
    } else {
        echo "Usuário ou senha inválidos.";
    }
}

$conn->close();
?>
