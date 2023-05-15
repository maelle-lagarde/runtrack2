<!DOCTYPE html>
<html>
<head>
    <title>Liste des prénoms</title>
    <meta charset="UTF-8">
</head>

<body>

<?php
    session_start();

    // vérifier si le formulaire a été soumis.
    if (isset($_POST['submit'])) {
        // vérifier si le prénom a été saisi.
        if (!empty($_POST['prenom'])) {
            // ajouter le prénom à la variable de session.
            $_SESSION['prenoms'][] = $_POST['prenom'];
        }
    }

    // vérifier si le bouton de réinitialisation a été cliqué.
    if (isset($_POST['reset'])) {
        // réinitialiser la varianle de session des prénoms.
        $_SESSION['prenoms'] = [];
    }
?>

<form method="post" action="">
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom">
    <input type="submit" name="submit" value="Ajouter">
</form>

<ul>
    <?php
    // vérifier si la variable de session des prénoms existe et n'est pas vide.
    if (isset($_SESSION['prenoms']) && !empty($_SESSION['prenoms'])) {
        foreach ($_SESSION['prenoms'] as $prenom) {
            echo "<li>$prenom</li>";
        }
    }
    ?>
</ul>

<form method="post" action="">
    <input type="submit" name="reset" value="Réinitialiser">
</form>

</body>
</html>