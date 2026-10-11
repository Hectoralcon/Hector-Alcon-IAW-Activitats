<?php
    $preu = $_GET["preu"] ?? "";
    $iva = $_GET["iva"] ?? "";

    switch ($iva) {
        case "21":
            $percentatge = 21;
            break;
        case "10":
            $percentatge = 10;
            break;
        case "4":
            $percentatge = 4;
            break;
        default:
            echo "No s'ha seleccionat tipus d'IVA.";
    }

    if ($preu == NULL || $preu < 0) {
        echo "Preu no vàlid.";
        exit;
    }

    $quantitatIVA = $preu * $percentatge / 100;
    $total = $preu + $quantitatIVA;

    echo "IVA aplicat: $percentatge%<br>";
    echo "Quantitat d'IVA: $quantitatIVA €<br>";
    echo "Preu final amb IVA: $total €";
?>