<?php
$host = "seu_host_mysql";
$usuario = "seu_usuario_mysql";
$senha = "sua_senha_mysql";
$banco = "seu_banco_de_dados";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
