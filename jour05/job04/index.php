<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de connexion</title>
    <meta charset="UTF-8">
</head>

<body>

<?php
// vérifier si le formulaire a été soumis.
if (isset($_POST['connexion'])) {
    // vérifier si le prénom a été saisi.
    if (!empty($_POST['prenom'])) {
        // définir le cookie avec le prénom.
        setcookie('prenom', $_POST['prenom'], time() + 86400); // le cookie expire dans 24H (86400 secondes).
        header('Location: ' . $_SERVER['PHP_SELF']); // redirection vers la même page pour éviter de renvoyer le formulaire.
        exit;
    }
}

// vérifier si l'utilisateur est déjà connecté.
if (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
    echo "Bonjour $prenom !";
    echo '<form method="post" action="">
                <input type="submit" name="deco" value="Déconnexion">
            </form>';
} else {
    // afficher le formulaire de connexion.
    echo '<form method="post" action="">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom">
            <input type="submit" name="connexion" value="Connexion">
        </form>';
}

// vérifier si le bouton de déconnexion a été cliqué.
if (isset($_POST['deco'])) {
    // supprimer le cookie en définissant une date d'expiration antérieure.
    setcookie('prenom', '', time() - 3600);
    header('Location: ' . $_SERVER['PHP_SELF']); // rediriger vers la même page pour afficher à nouveau le formulaire de connexion.
    exit;
}
?>

</body>
</html>