<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
    <meta charset="UTF-8">
</head>

<body>

<?php
    // vérifier si le cookie existe et obtenir sa valeur.
    if (isset($_COOKIE['nbvisites'])) {
        $nbVisites = $_COOKIE['nbvisites'];
    } else {
        // si le cookie n'existe pas, initialiser le compteur à 0.
        $nbVisites = 0;
    }
    // incrémenter le compteur de visites.
    $nbVisites++;
    // définir le cookie avec la nouvelle valeur.
    setcookie('nbvisites', $nbVisites, time() + 86400); // le cookie expire dans 24H (86400 secondes).
    // afficher le contenu ddu cookie.
    echo "Nombre de visites : " . $nbVisites;
    // vérifier si le bouton de réinitialisation a été cliqué.
    if (isset($_POST['reset'])) {
        // réinitialiser le cookie en le supprimant.
        setcookie('nbvisites', '', time() - 3600); // définir une date d'expiration antérieure pour supprimer le cookie.
        $nbVisites = 0;
    }

?>

<form method="post" action="">
    <input type="submit" name="reset" value="Réinitialiser">
</form>

</body>
</html>