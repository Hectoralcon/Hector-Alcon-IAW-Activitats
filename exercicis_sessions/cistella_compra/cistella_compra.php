<?php
    session_start();
    
    if (isset($_GET["producte"]) && isset($_GET["quantitat"])) {
        $producte = $_GET["producte"];
        $quantitat = $_GET["quantitat"];
    
        if (($producte == "samarreta" || $producte == "gorra") && $quantitat > 0) {
            if (isset($_SESSION[$producte])) {
                $_SESSION[$producte] = $_SESSION[$producte] + $quantitat;
            } else {
                $_SESSION[$producte] = $quantitat;
            }
        }
    }

    header("Location: index.html");
?>