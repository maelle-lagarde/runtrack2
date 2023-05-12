<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>

<form action="" method="get">
    <label for="nom">Nom : <input type="text" name="nom" id="nom"></label><br>
    <label for="prenom">Prénom : <input type="text" name="prenom" id="prenom"></label><br>
    <label for="email">E-mail : <input type="text" name="email" id="email"></label><br>
    <input type="submit" value="Envoyer">
</form>

<?php
    if (count($_GET) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";
        foreach ($_GET as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Aucun argument GET n'a été envoyé.";
    }
?>

</body>

</html>