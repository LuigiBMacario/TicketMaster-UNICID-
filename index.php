<?php
    include 'php/head.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./js/index.js"></script>
    <title>TicketMaster</title>
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
                <a class="logo-link" href="index.php">TicketMaster</a>
            </div>
            <ul>
                <?php include "./php/header.php"?>
            </ul>
        </header>
        <nav></nav>
        <main>
            <h1 class="spotlight-event"> EVENTO EM DESTAQUE</h1>
            <div class="spotlight-event-placeholder">
                <a href="#"><img class="spotlight-event-img" src="./media/images/LTA_BANNER.jpg" alt="LTA Banner"></a>
            </div>
            <h1 class="all-events">TODOS OS EVENTOS</h1>
            <p class="event-area-title" align="center">Escolha um dos eventos abaixo para saber mais!</p>
            <div class="event-grid">
                <?php include 'php/events.php'; ?>
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
