<?php
// Incluir a configuração do banco de dados
require '../server/config/db.php';

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Receber dados do formulário
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];
$customer_name = $_POST['customer_name'];
$customer_email = $_POST['customer_email'];
$shipping_address = $_POST['shipping_address'];

// Inserir pedido no banco de dados
$sql = "INSERT INTO orders (product_id, quantity, customer_name, customer_email, shipping_address) VALUES ($product_id, $quantity, '$customer_name', '$customer_email', '$shipping_address')";

if ($conn->query($sql) === TRUE) {
    // Redirecionar para a página de confirmação com sucesso
    header("Location: confirmation.php?status=success");
} else {
    // Redirecionar para a página de confirmação com falha
    header("Location: confirmation.php?status=failure");
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
