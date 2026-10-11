<?php
    $estil = $_GET["estil"] ?? "";

    switch ($estil){
        case "pop":
            echo "\"Annie are you ok?\"  - Rey del Pop";
            break;
        case "rap": 
            echo "Eres el Real Slim Shady!";
            break;
        case "reggaeton":
            echo "Te gusta la gasolina!";
            break;
        case "rock":
            echo "Rock & Roll!!";
            break;
        default:
            echo "No s'ha escollit cap d'aquests estils de música.";
    }
?>