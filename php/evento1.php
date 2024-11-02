<?php
session_start(); // Iniciar a sessão
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unilelo Paraverso</title>
    <script>
        function atualizarTotal() { //função que quando você muda a quantidade de ingresso calcula o preço
            var preco = 100.00;
            var quantidade = document.getElementById('quantidade').value; // pega a quantidade de ingreços e atribui a variavel quantidade
            var total = preco * quantidade; // faz o calculo total
            document.getElementById('valorTotal').textContent = total.toFixed(2).replace('.', ','); // mostra na tela ao mesmo tempo que aumenta os ingreços o preço que vai ficar.
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

    <h1>Unilelo Paraverso</h1>
    <p>A maior feira de games do Universo</p>
    <p>Data: 32 de Outubro de 2064</p>
    <p>Preço: R$ 100,00</p>
    
    <h2>Escolha a quantidade de ingressos:</h2>
    <form method="POST" action="comprar.php">
        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" min="1" value="1" onchange="atualizarTotal()">
        <p>Total: R$ <span id="valorTotal">100,00</span></p> 
        <button type="submit">Confirmar Compra</button> 
    </form>

    <a href="index.php">Voltar para a página inicial</a>
</body>
</html>
