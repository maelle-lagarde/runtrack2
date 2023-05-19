<?php
    // connexion à la base de données avec PDO.
    $bdd = new PDO("mysql:host=localhost; dbname=jour09", 'root', 'root');

    // requête SQL
    $requete = $bdd->prepare('SELECT nom, capacite FROM salles');
    $requete->execute();
    $users = $requete->fetchall();

    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>nom</th>';
    echo '<th>capacite</th>';

    foreach($users as $user) {
        echo '<tr>';
        echo '<td>' . $user['nom'] . '</td>';
        echo '<td>' . $user['capacite'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
?>