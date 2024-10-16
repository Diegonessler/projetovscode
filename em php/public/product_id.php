<?php
// Incluir a configuração do banco de dados
require '../server/config/db.php';

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consulta para buscar todos os produtos
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Verificar se há produtos
if ($result->num_rows > 0) {
    // Listar todos os produtos
    while ($row = $result->fetch_assoc()) {
        echo "<h1>" . htmlspecialchars($row['name']) . "</h1>";
        echo "<p>" . htmlspecialchars($row['description']) . "</p>";
        echo "<p>Preço: R$ " . number_format($row['price'], 2, ',', '.') . "</p>";
        echo '<a href="checkout.php?product_id=' . $row['id'] . '">Comprar Agora</a><br><br>';
    }
} else {
    echo "Nenhum produto encontrado.";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
