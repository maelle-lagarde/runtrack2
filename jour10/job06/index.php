<?php
    // connexion à la base de données avec PDO.
    $bdd = new PDO("mysql:host=localhost; dbname=jour09", 'root', 'root');

    // requête SQL
    $requete = $bdd->prepare("SELECT COUNT(*) as count FROM etudiants");
    $requete->execute();
    $users = $requete->fetch();
    $count = $users["count"];

    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nombre d'étudiants</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $count . "</td>";
    echo "</tr>";
    echo '</tbody>';
    echo '</table>';
?>