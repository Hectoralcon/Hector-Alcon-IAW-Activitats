<?php
    session_start();
    
    if (isset($_SESSION["usuari"])) {
        echo "Usuari: " . $_SESSION["usuari"];
        echo "<a href='logout.php'> Tancar sessió</a>";
        echo "<h1>Pàgina d'informació 1</h1>";
        echo "Aquesta és la primera pàgina amb informació.<br>";
        echo "<a href='pagina2.php'>Anar a la pàgina 2</a>";
    } else {
        header("Location: index.html");
    }
?>