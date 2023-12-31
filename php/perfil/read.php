<?php

include("../core/conexao.php");

$sql = "SELECT * FROM perfis";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo json_encode($row);
    }
} else {
    echo "0 resultados encontrados";
}

$conn->close();
?>
