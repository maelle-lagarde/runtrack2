<?php
    // connexion à la base de données avec PDO.
    $bdd = new PDO("mysql:host=localhost; dbname=jour09", 'root', 'root');

    // requête SQL
    $requete = $bdd->prepare("SELECT SUM(capacite) as total FROM salles");
    $requete->execute();
    $result = $requete->fetch();
    $total = $result['total'];

    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>capacite_totale</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $total . "</td>";
    echo "</tr>";
    echo '</tbody>';
    echo '</table>';
?>