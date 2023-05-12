<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>

<form action="" method="get">
    <label for="largeur">Largeur : <input type="text" name="largeur" id="largeur"></label><br>
    <label for="hauteur">Hauteur : <input type="text" name="hauteur" id="hauteur"></label><br>
    <input type="submit" value="Envoyer">
</form>

<?php
if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
    if ($largeur == '1O' && $hauteur == '5') {
        echo "Ce n'est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
}
?>

</body>

</html>