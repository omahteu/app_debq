<?php
session_start();

include("../core/conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT id, username FROM usuarios WHERE username = '$username' and senha = MD5('$password')";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        header("location: home.php"); // redireciona para a página home
    } else {
        echo "Usuário ou senha inválidos.";
    }
}

$conn->close();
?>
