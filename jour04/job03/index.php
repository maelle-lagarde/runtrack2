<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>

<form action="" method="post">
    <label for="nom">Nom : <input type="text" name="nom" id="nom"></label><br>
    <label for="prenom">Prénom : <input type="text" name="prenom" id="prenom"></label><br>
    <label for="email">E-mail : <input type="text" name="email" id="email"></label><br>
    <input type="submit" value="Envoyer">
</form>

<?php
    $count = count($_POST);
    echo "Le nombre d'arguments POST envoyé est : " . $count;
?>

</body>

</html>