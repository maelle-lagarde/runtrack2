<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
    <meta charset="UTF-8">
</head>

<body>

<?php
    session_start();

    // initialiser la variable de session à 0.
    if(!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 0;
    }
    // incrémenter le compter de visites.
    $_SESSION['nbvisites']++;
    // afficher le contenu de la variable de session.
    echo "Nombre de visites : " . $_SESSION['nbvisites'];

    // vérifier si le bouton de réinitialisation a été cliqué.
    if(isset($_POST['reset'])) {
        // réinitialiser la variable de session à 0.
        $_SESSION['nbvisites'] = 0;
    }

?>

<form method="post" action="">
    <input type="submit" name="reset" value="Réinitialiser">
</form>

</body>
</html>