<?php
session_start();

include("../core/conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['usuario']);
    $password = mysqli_real_escape_string($conn, $_POST['senha']);

    $sql = "SELECT id, codigo, igreja FROM usuarios WHERE codigo = '$username' and senha = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id'];
        $_SESSION['igreja'] = $row['igreja'];
        $_SESSION['codigo'] = $row['codigo'];
        header("location: ../../home.php");
    } else {
    
        echo $username, $password;
        echo "Usuário ou senha inválidos.";
    }
}

$conn->close();
?>
