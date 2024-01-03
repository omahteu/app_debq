<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEBQ 207 | Relatório</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./imagens/icon.png" type="image/x-icon">
</head>

<body>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Infantil</th>
                    <th scope="col">Adolescentes</th>
                    <th scope="col">Jovens</th>
                    <th scope="col">Adultos</th>
                    <th scope="col">Entradas</th>
                    <th scope="col">Saídas</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                include("./php/core/conexao.php"); // Certifique-se de incluir o arquivo de conexão
        
                // Executar operação de SELECT
                $sql = "SELECT * FROM relatorios";
                $result = $conn->query($sql);
        
                if ($result->num_rows > 0) {
                    // Exibir os dados em uma tabela HTML
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['data'] . "</td>";
                        echo "<td>" . $row['infantil'] . "</td>";
                        echo "<td>" . $row['adolescentes'] . "</td>";
                        echo "<td>" . $row['jovens'] . "</td>";
                        echo "<td>" . $row['adultos'] . "</td>";
                        $entradas = $row['e1'] + $row['e2'] + $row['e3'] + $row['e4'] + $row['e5'];
                        echo "<td>" . $entradas . "</td>";
                        $saidas = $row['s1'] + $row['s2'] + $row['s3'] + $row['s4'] + $row['s5'];
                        echo "<td>" . $saidas. "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Nenhum usuário encontrado</td></tr>";
                }
        
                // Fechar a conexão
                $conn->close();
                ?>
                
            </tbody>
        </table>
    </div>
</body>

</html>