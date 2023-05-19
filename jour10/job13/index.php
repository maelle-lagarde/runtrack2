<?php
    // connexion à la base de données avec PDO.
    $bdd = new PDO("mysql:host=localhost; dbname=jour09", 'root', 'root');

    // requête SQL
    $requete = $bdd->prepare("SELECT salles.nom AS nom_salle, etage.nom AS nom_etage FROM salles JOIN etage ON salles.id_etage = etage.id");
    $requete->execute();
    $salles_etages = $requete->fetchAll();

    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nom de la salle</th>";
    echo "<th>Nom de l'étage</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach($salles_etages as $salle_etage) {
        echo "<tr>";
        echo "<td>" . $salle_etage['nom_salle'] . "</td>";
        echo "<td>" . $salle_etage['nom_etage'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
?>