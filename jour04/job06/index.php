<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>

<form action="" method="get">
    <label for="nombre">Nombre : <input type="text" name="nombre" id="nombre"></label><br>
    <input type="submit" value="Envoyer">
</form>

<?php
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        if ($nombre % 2 == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    }
?>

</body>

</html>