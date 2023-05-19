<?php
    // connexion à la base de données avec PDO.
    $bdd = new PDO("mysql:host=localhost; dbname=jour09", 'root', 'root');

    // requête SQL
    $requete = $bdd->prepare('SELECT * FROM etudiants');
    $requete->execute();
    $users = $requete->fetchall();

    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>id</th>';
    echo '<th>prenom</th>';
    echo '<th>nom</th>';
    echo '<th>naissance</th>';
    echo '<th>sexe</th>';
    echo '<th>email</th>';

    foreach($users as $user) {
        echo '<tr>';
        echo '<td>' . $user['id'] . '</td>';
        echo '<td>' . $user['prenom'] . '</td>';
        echo '<td>' . $user['nom'] . '</td>';
        echo '<td>' . $user['naissance'] . '</td>';
        echo '<td>' . $user['sexe'] . '</td>';
        echo '<td>' . $user['email'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
?>