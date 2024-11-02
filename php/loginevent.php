<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'trabalhophp';

    $conn = new mysqli($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }
    
    $usuario = $_POST["username"];
    $senha = $_POST["password"];
    
    $usuario = $conn->real_escape_string($usuario);
    $senha = $conn->real_escape_string($senha);


    $sql = "SELECT * FROM login_data WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row["passkey"])) {
            session_start();
            $_SESSION["just_sub"] = false;
            $_SESSION["logout"] = false;
            $_SESSION["username"] = $usuario;
            echo "Login bem-sucedido!";
            header("Location: profile.php");
        } else {
            echo "Usuário ou senha incorretos.";
        }
    } else {
        echo "Usuário ou senha incorretos.";
    }
?>
