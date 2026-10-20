<?php
    if (isset($_GET["canviar"])){
        $majoredat = "";
        $idioma = "";
        $moneda = "";
    } elseif (isset($_GET["enviar"])){
        $majoredat = $_GET["majoredat"];
        $idioma = $_GET["idioma"];
        $moneda = $_GET["moneda"];

        setcookie("majoredat", $majoredat, time() + 3600);
        setcookie("idioma", $idioma, time() + 3600);
        setcookie("moneda", $moneda, time() + 3600);
    } elseif (isset($_COOKIE["majoredat"]) && isset($_COOKIE["idioma"]) && isset($_COOKIE["moneda"])){
        $majoredat = $_COOKIE["majoredat"];
        $idioma = $_COOKIE["idioma"];
        $moneda = $_COOKIE["moneda"];
    } else {
        $majoredat = "";
        $idioma = "";
        $moneda = "";
    }

    if ($moneda == "eur"){
        $preu1 = "39 €";
        $preu2 = "25 €";
    } elseif ($moneda == "gbp"){
        $preu1 = "33 £";
        $preu2 = "21 £";
    } else {
        $preu1 = "43 $";
        $preu2 = "27 $";
    }
?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Bodega de vins</title>
    </head>
    <body>
        <?php
        if ($majoredat == ""){
            echo "<h1>Benvingut / Bienvenido / Welcome</h1>";
            ?>
            <form action="bodega.php" method="get">
                <p>Ets major d'edat? / ¿Eres mayor de edad? / Are you of legal age?</p>
                <input type="radio" name="majoredat" value="si" checked> Sí / Yes
                <input type="radio" name="majoredat" value="no"> No
                <p>Idioma / Idioma / Language:</p>
                <select name="idioma">
                    <option value="ca">Català</option>
                    <option value="es">Español</option>
                    <option value="en">English</option>
                </select>
                <p>Moneda / Moneda / Currency:</p>
                <select name="moneda">
                    <option value="eur">Euros €</option>
                    <option value="gbp">Lliures / Libras / Pounds £</option>
                    <option value="usd">Dòlars / Dólares / Dollars $</option>
                </select>
                <br><br>
                <button type="submit" name="enviar" value="si">Entrar / Enter</button>
            </form>
            <?php
        } else {
            if ($majoredat == "no") {
                if ($idioma == "ca") {
                    echo "<h1>No et podem vendre alcohol si ets menor d'edat.</h1>";
                } elseif ($idioma == "es") {
                    echo "<h1>No podemos venderte alcohol si eres menor de edad.</h1>";
                } else {
                    echo "<h1>We cannot sell you alcohol if you are underage.</h1>";
                }
            } else {
                if ($idioma == "ca") {
                    echo "<h1>La nostra bodega</h1>";
                    echo "<p>T'oferim el vi \"Les Terrasses\" a un preu de $preu1</p>";
                    echo "<p>T'oferim el whisky \"Blue Label\" a un preu de $preu2</p>";
                } elseif ($idioma == "es") {
                    echo "<h1>Nuestra bodega</h1>";
                    echo "<p>Te ofrecemos el vino \"Les Terrasses\" a un precio de $preu1</p>";
                    echo "<p>Te ofrecemos el whisky \"Blue Label\" a un precio de $preu2</p>";
                } else {
                    echo "<h1>Our winery</h1>";
                    echo "<p>We offer you the wine \"Les Terrasses\" at a price of $preu1</p>";
                    echo "<p>We offer you the whisky \"Blue Label\" at a price of $preu2</p>";
                }
            }
            echo "<p><a href='bodega.php?canviar=si'>Canviar opcions / Cambiar opciones / Change options</a></p>";
        }
        ?>
    </body>
</html>