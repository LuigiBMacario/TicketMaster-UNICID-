<?php
session_start(); // Iniciar a sessão

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_logado'])) {
    header('Location: login.php'); // Redireciona para a página de login
    exit; // Para garantir que o código abaixo não seja executado
}

// Verifica se a quantidade foi enviada
if (isset($_POST['quantidade'])) {
    $quantidade = (int) $_POST['quantidade'];
    $preco = 100.00; // Preço fixo para BGS, mude para 80.00 para o outro evento

    // Verifica se a quantidade
}
