<?php
$servername = "10.30.10.41";
$username = "root";
$password = "Senha123";
$database = "BancodeDados";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
