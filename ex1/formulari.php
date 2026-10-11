<?php
    $nom = $_GET["nom"];
    $email = $_GET["email"];
    $cognoms = $_GET["cognoms"];
    $missatge = $_GET["missatge"];

    if (!empty($nom) && !empty($cognoms) && !empty($email) && !empty($missatge)){
        echo "Missatge rebut, $nom. Gràcies per contactar, et respondrem a $email.";
    } else {
        echo "No s'ha enviat el missatge, falten dades.";
    }
?>

<!-- He utilitzat el mètode GET en tota l'activitat perquè els exercicis envien dades senzilles, o per fer 
un càlcul. Amb GET, les dades apareixen a l'URL i és més fàcil veure com es passen del formulari HTML al 
fitxer PHP. A més, permet repetir el càlcul recarregant la pàgina amb els mateixos valors. -->