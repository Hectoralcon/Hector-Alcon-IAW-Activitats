<?php
    session_start();
    
    if (isset($_SESSION["usuari"])) {
        echo "Usuari: " . $_SESSION["usuari"];
        echo "<a href='logout.php'> Tancar sessió</a>";
        echo "<h1>Pàgina d'informació 2</h1>";
        echo "Aquesta és la segona pàgina amb informació.<br>";
        echo "<a href='pagina1.php'>Anar a la pàgina 1</a>";
    } else {
        header("Location: index.html");
    }
?>