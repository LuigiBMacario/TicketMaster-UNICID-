<?php 
    if (isset($_SESSION['logout'])) {
        if ($_SESSION['logout'] == true) {
            $_SESSION['logout'] = false;
        } else {
            session_start();
        }
    } else {
        session_start();
    }
?>
