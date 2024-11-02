<?php include './head.php';
    $_SESSION["address"] = "";
    $_SESSION["phone"] = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_GET["address"])) {
            $_SESSION["address"] = $_POST["address"];
        }
        if (isset($_GET["phone"])) {
            $_SESSION["phone"] = $_POST["phone"];
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
    <script src="../js/index.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title><?php $_SESSION["username"]?> | TicketMaster</title>
</head>
<body>
<div id="loading-screen">
    <h2>Carregando...</h2>
</div>
<div class="stars-container">
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
</div>
<div class="container">
    <header>
        <div class="logo-placeholder">
            <a class="logo-link" href="../index.php">TicketMaster</a>
        </div>
        <ul>
            <?php include "./header.php"?>
        </ul>
    </header>
    <nav></nav>
    <main>
        <?php
            if ($_SESSION["just_sub"] == true) {
                echo "Você foi cadastrado com sucesso! </br>";
                echo "<h1 class='welcome-user'>Bem-vindo ao TicketMaster, " . $_SESSION["username"] . "!</h1>";
                $_SESSION["just_sub"] = false;
            } else{
                echo "<h1 class='welcome-user'>Bem-vindo ao TicketMaster, " . $_SESSION["username"] . "!</h1>";
            }
        ?>
        <div class="profile-container">
            <div class="profile-info">
                <h2>Informações do Perfil</h2>
                <div class="profile-image-div">
                    <img class="profile-image" src="../media/images/default_user.jpg" alt="Foto de perfil">
                    <p class="username">Nome:  <?php echo $_SESSION["username"]?></p>
                </div>
                <div class="right-side">
                    
                    <form action="" method="post">
                        <label for="address">Endereço: <?php $_SESSION["address"]?></label>
                        <input type="text" name="address" value="<?php echo $_SESSION["address"]?>">
                        <label for="phone">Telefone: <?php $_SESSION["phone"]?></label>
                        <input type="number" name="phone" value="<?php echo $_SESSION["phone"]?>">
                        <button type="submit">Salvar</button>
                    </form>
                    <form action="logout.php" mathod='post'>
                            <button class="logoff" type="submit">Encerrar Sessão</button>
                        </form>  
                </div>
            </div>
        </div>
    </main>
    <aside></aside>
    <footer>
        <div class="footer-container">
            <div class="row">
                <div class="footer-col">
                    <h4>A Empresa</h4>
                    <ul>
                        <li><a href="#">sobre nós</a></li>
                        <li><a href="#">nossos serviços</a></li>
                        <li><a href="#">politica de privacidade</a></li>
                        <li><a href="#">programa de afiliados</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>ajuda</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">entregas</a></li>
                        <li><a href="#">devoluções</a></li>
                        <li><a href="#">problema com pedidos</a></li>
                        <li><a href="#">formas de pagamento</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <ul>
                        <h4>eventos</h4>
                        <li><a href="#">Americas Challengers</a></li>
                        <li><a href="#">Free Fire World Series</a></li>
                        <li><a href="#">IEM rio</a></li>
                        <li><a href="#">LTA 2025</a></li>
                        <li><a href="#">worlds 2024</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <ul>
                        <h4>nos siga</h4>
                        <div class="social-links">
                            <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                            <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                            <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                            <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
