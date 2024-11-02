<?php 
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

    $currentUrl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (isset($_SESSION["username"])) {
        if ($currentUrl == "http://localhost/trabalhophp/php/profile.php") {
            echo "<li><a class='header-link' href='./contato.php'>Contato</a></li>";
            echo "<li><a class='header-link' href='#'>Sobre</a></li>";
            echo "<li><a class='header-link' href='./pedido.php'><ion-icon style='font-size: 25px' name='bag-handle-outline' width=80px></ion-icon></a></li>";
            echo "<li><a class='header-link' href='./profile.php'><ion-icon style='font-size: 25px' name='person-circle-outline'></ion-icon></a></li>";
        }else{
            echo "<li><a class='header-link' href='./php/contato.php'>Contato</a></li>";
            echo "<li><a class='header-link' href='#'>Sobre</a></li>";
            echo "<li><a class='header-link' href='./php/pedido.php'><ion-icon style='font-size: 25px' name='bag-handle-outline' width=80px></ion-icon></a></li>";
            echo "<li><a class='header-link' href='./php/profile.php'><ion-icon style='font-size: 25px' name='person-circle-outline'></ion-icon></a></li>";
        }
    } else {
        echo "<li><a class='header-link' href='./php/login.php'>Entrar</a></li>";
        echo "<li><a class='header-link' href='./php/signup.php'>Cadastrar-se</a></li>";
        echo "<li><a class='header-link' href='./php/contato.php'>Contato</a></li>";
        echo "<li><a class='header-link' href='#'>Sobre</a></li>";
    }
?>
