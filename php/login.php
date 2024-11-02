<?php include 'head.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <script src="../js/login.js"></script>
    <title>TicketMaster | Entrar</title>
</head>
<body>
<?php include 'verify_session.php';?>
<div id="loading-screen">
    <h2>Carregando...</h2>
</div>
<div class="stars-container">
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
</div>
<div class="animation-container">
    <div class="form-container">
        <form action="./loginevent.php" method="post" class="form">
            <div class="wrapper">
                <a class="logo-link" href="../index.php">TicketMaster</a>
                <h1 class="signup-title">Entrar</h1>
                    <label class="signup-label" for="username">
                        <span>Nome de usuário</span>
                        <input type="text" id="username" name="username" class="input" required autocomplete="username">
                    </label>
                    <label class="signup-label" for="password">
                        <span>Senha</span>
                        <input type="password" id="password" name="password" class="input" required autocomplete="123456">
                    </label>
            </div>
            <div class="bottom-wrapper">
                <button type="submit" name="submit" class="signup-button" disabled>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M11.293 4.707 17.586 11H4v2h13.586l-6.293 6.293 1.414 1.414L21.414 12l-8.707-8.707-1.414 1.414z"/></svg>
                </button>
                <a href="#" class="signup-link">Não consegue entrar?</a>
                <a href="./signup.php" class="signup-link">Cadastrar-se</a>
            </div>  
        </form>
    </div>
</div>
</body>
</html>
