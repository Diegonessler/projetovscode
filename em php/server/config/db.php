<?php
$servername = "localhost";
$username = "root";
$password = "sua_senha";
$dbname = "pico_neo_store";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
