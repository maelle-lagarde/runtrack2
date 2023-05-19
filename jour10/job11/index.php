<?php
    // connexion à la base de données avec PDO.
    $bdd = new PDO("mysql:host=localhost; dbname=jour09", 'root', 'root');

    // requête SQL
    $requete = $bdd->prepare("SELECT AVG(capacite) as moyenne_capacite FROM salles");
    $requete->execute();
    $salles = $requete->fetchAll();

    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Moyenne des salles</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach($salles as $salle) {
        echo "<tr>";
        echo "<td>" . $salle['moyenne_capacite'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
?>