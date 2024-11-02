<?php
    $nome = $_POST['username'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $conexao = new mysqli('localhost', 'root', '', 'trabalhophp');

    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }

    $sql = "INSERT INTO login_data (username, email, passkey) VALUES ('$nome', '$email', '$senha')";
    if ($conexao->query($sql) === TRUE) {
        session_start();
        $_SESSION["just_sub"] = true;
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        echo "Inscrição realizada com sucesso!";
        header("Location: profile.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
        header("Location: index.php");
    }

    $conexao->close();
?>