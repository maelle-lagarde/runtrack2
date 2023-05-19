<?php
    // connexion à la base de données avec PDO.
    $bdd = new PDO("mysql:host=localhost; dbname=jour09", 'root', 'root');

    // requête SQL
    $requete = $bdd->prepare("SELECT * FROM `salles` ORDER BY `salles`.`capacite` ASC");
    $requete->execute();
    $salles = $requete->fetchAll();

    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>nom</th>";
    echo "<th>id_etage</th>";
    echo "<th>capacité</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach($salles as $salle) {
        echo "<tr>";
        echo "<td>" . $salle['nom'] . "</td>";
        echo "<td>" . $salle['id_etage'] . "</td>";
        echo "<td>" . $salle['capacite'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
?>