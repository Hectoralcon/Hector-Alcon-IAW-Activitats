<?php
    $preu = 20;
    $missatge = "";

    if (isset($_COOKIE["visites"])) {
        $visites = $_COOKIE["visites"];
    } else {
        $visites = 0;
    }

    if (!isset($_GET["comprar"])) {
        $visites++;
        setcookie("visites", $visites, time() + 3600);
    }

    if (isset($_GET["comprar"])) {
        $codi = $_GET["descomptes"];
        if ($codi == "BOTIGA20" && $visites >= 5 && !isset($_COOKIE["comprat"])) {
            $total = $preu * 0.8;
            $missatge = "Has comprat amb un descompte del 20%. Total: $total €";
            setcookie("comprat", "si", time() + 3600);
        } elseif ($codi == "BOTIGA50" && $visites >= 10 && !isset($_COOKIE["comprat"])) {
            $total = $preu * 0.5;
            $missatge = "Has comprat amb un descompte del 50%. Total: $total €";
            setcookie("comprat", "si", time() + 3600);
        } else {
            $missatge = "Has comprat sense descompte. Total: $preu €";
        }
    }

    echo "<h1>Botiga amb comptador de visites per guanyar descomptes!</h1>";
    echo "<h2>El nostre producte té un preu de $preu €</h2>";
    echo "<h2>Comptador de Visites: $visites</h2>";

    if (!isset($_COOKIE["comprat"])) {
        if ($visites >= 10) {
            echo "<p>Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga</p>";
        } elseif ($visites >= 5) {
            echo "<p>Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga</p>";
        }
    }

    echo "<p>$missatge</p>";
?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Comptador Visites</title>
    </head>
    <body>
        <form action="comptador_visites.php" method="get">
            <input type="text" name="descomptes">
            <button type="submit" name="comprar" value="si">Comprar</button>
        </form>
    </body>
</html>