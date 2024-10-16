<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Compra</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Confirmação de Compra</h1>
    </header>
    <section>
        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'success') {
            echo '<h2>Compra realizada com sucesso!</h2>';
            echo '<p>Obrigado por sua compra. Seu pedido será processado em breve.</p>';
        } else {
            echo '<h2>Falha na compra</h2>';
            echo '<p>Houve um problema ao processar sua compra. Por favor, tente novamente.</p>';
        }
        ?>
        <a href="index.html" class="btn">Voltar para a loja</a>
    </section>
</body>
</html>
