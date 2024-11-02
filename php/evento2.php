<?php
session_start(); // Iniciar a sessão
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festival do SAO</title>
    <script>
        function atualizarTotal() {
            var preco = 80.00; // Preço do ingresso
            var quantidade = document.getElementById('quantidade').value;
            var total = preco * quantidade;
            document.getElementById('valorTotal').textContent = total.toFixed(2).replace('.', ',');
        }
    </script>
</head>
<body>

    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="cadastro.php">Cadastro</a>
        <a href="login.php">Entrar</a>
        <a href="contato.php">Contato</a>
        <a href="pedidos.php">Pedidos</a>
        <a href="sobre.php">Sobre</a>
    </div>

    <h1>Festival do SAO</h1>
    <p>Os melhores espadashins do mundo estarão aqui.</p>
    <p>Data: 666 de Dezembro de 2064</p>
    <p>Preço: R$ 80,00</p>
    
    <h2>Escolha a quantidade de ingressos:</h2>
    <form method="POST" action="comprar.php">
        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" min="1" value="1" onchange="atualizarTotal()">
        <p>Total: R$ <span id="valorTotal">80,00</span></p>
        <button type="submit">Confirmar Compra</button>
    </form>

    <a href="index.php">Voltar para a página inicial</a>
</body>
</html>
