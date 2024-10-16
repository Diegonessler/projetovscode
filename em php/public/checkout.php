<?php
// Incluir a configuração do banco de dados
require '../server/config/db.php';

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verificar se o 'product_id' foi passado
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    
    // Consulta para buscar o produto
    $sql = "SELECT * FROM products WHERE id = $product_id";
    $result = $conn->query($sql);

    // Verificar se o produto foi encontrado
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        die("Produto não encontrado.");
    }
} else {
    die("Nenhum produto selecionado.");
}

// Fechar a conexão com o banco de dados
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Checkout - <?php echo htmlspecialchars($product['name']); ?></title>
</head>
<body>
    <header>
        <h1>Checkout</h1>
    </header>
    <section>
        <img src="<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
        <h2><?php echo htmlspecialchars($product['name']); ?></h2>
        <p>Preço: R$ <?php echo number_format($product['price'], 2, ',', '.'); ?></p>
        <form action="process_order.php" method="POST">
            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
            <label for="quantity">Quantidade:</label>
            <input type="number" name="quantity" value="1" min="1" required>
            <label for="customer_name">Nome:</label>
            <input type="text" name="customer_name" required>
            <label for="customer_email">Email:</label>
            <input type="email" name="customer_email" required>
            <label for="shipping_address">Endereço de Entrega:</label>
            <textarea name="shipping_address" required></textarea>
            <button type="submit">Finalizar Compra</button>
        </form>
    </section>
</body>
</html>
