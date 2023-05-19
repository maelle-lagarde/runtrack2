<?php
    // connexion à la base de données avec PDO.
    $bdd = new PDO("mysql:host=localhost; dbname=jour09", 'root', 'root');

    // requête SQL
    $requete = $bdd->prepare("SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'");
    $requete->execute();
    $users = $requete->fetchall();

    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>prenom</th>';
    echo '<th>nom</th>';
    echo '<th>naissance</th>';
    echo '</thead>';
    echo '<tbody>';

    foreach($users as $user) {
        echo '<tr>';
        echo '<td>' . $user['prenom'] . '</td>';
        echo '<td>' . $user['nom'] . '</td>';
        echo '<td>' . $user['naissance'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
?>