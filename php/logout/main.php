<?php
session_start();
session_destroy();
header("location: ../../index.php"); // redireciona para a página de login após o logout
?>
