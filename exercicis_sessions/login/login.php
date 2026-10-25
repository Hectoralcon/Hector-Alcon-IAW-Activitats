<?php
    session_start();
    
    if (isset($_POST["usuari"]) && $_POST["usuari"] != "" && $_POST["usuari"] == $_POST["pwd"]) {
        $_SESSION["usuari"] = $_POST["usuari"];
        header("Location: pagina1.php");
    } else {
        header("Location: index.html");
    }
?>