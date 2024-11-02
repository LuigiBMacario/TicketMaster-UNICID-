<?php 
    if (isset($_SESSION["username"])) {
        echo "<li><a class='header-link' href='./php/contato.php'>Contato</a></li>";
        echo "<li><a class='header-link' href='#'>Sobre</a></li>";
        echo "<li><a class='header-link' href='./php/pedido.php'><ion-icon style='font-size: 25px' name='bag-handle-outline' width=80px></ion-icon></a></li>";
        echo "<li><a class='header-link' href='./php/profile.php'><ion-icon style='font-size: 25px' name='person-circle-outline'></ion-icon></a></li>";
    } else {
        echo "<li><a class='header-link' href='./php/login.php'>Entrar</a></li>";
        echo "<li><a class='header-link' href='./php/signup.php'>Cadastrar-se</a></li>";
        echo "<li><a class='header-link' href='./php/contato.php'>Contato</a></li>";
        echo "<li><a class='header-link' href='#'>Sobre</a></li>";
    }
?>
