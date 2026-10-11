<?php
    $eurodolar = $_GET["eurodolar"];
    $dolareuro = $_GET["dolareuro"];
    
    if ($eurodolar != NULL){
        $resultdolar = $eurodolar * 1.14;
        echo "Resultat a dolars: $resultdolar $.<br>";
    } else {
        echo "No s'ha posat valor per als euros.<br>";
    }

    if ($dolareuro != NULL){
        $resulteuro = $dolareuro * 0.89;
        echo " Resultat a euros: $resulteuro €.";
    } else {
        echo "No s'ha posat valor per als dolars.";
    }
?>