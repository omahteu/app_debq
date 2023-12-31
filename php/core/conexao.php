<?php
$host = "us-imm-web909.main-hosting.eu";
$usuario = "u626803805_debq207";
$senha = "A01d02c03b$";
$banco = "u626803805_debq207";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
