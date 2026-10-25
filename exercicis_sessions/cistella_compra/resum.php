<?php
    session_start();
    $preu_samarreta = 15;
    $preu_gorra = 8;
    $total = 0;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Resum de la compra</title>
    </head>
    <body>
        <h1>Resum de la compra</h1>
        <?php
            if (!isset($_SESSION["samarreta"]) && !isset($_SESSION["gorra"])) {
                echo "La cistella està buida.<br>";
                echo "<a href='index.html'>Tornar a la botiga</a>";
            } else {
                if (isset($_SESSION["samarreta"])) {
                    $quantitat = $_SESSION["samarreta"];
                    $subtotal = $quantitat * $preu_samarreta;
                    $total = $total + $subtotal;
                    echo "Samarreta: $quantitat x $preu_samarreta € = $subtotal €";
                }

                if (isset($_SESSION["gorra"])) {
                    $quantitat = $_SESSION["gorra"];
                    $subtotal = $quantitat * $preu_gorra;
                    $total = $total + $subtotal;
                    echo "Gorra: $quantitat x $preu_gorra € = $subtotal €";
                }

                echo "<h2>Total de la compra: $total €</h2>";
                ?>
                <form action="confirmar.php" method="get">
                    <button type="submit">Confirmar compra</button>
                </form>
                <br>
                <a href="index.html">Seguir comprant</a>
                <?php
            }
        ?>
    </body>
</html>