<!DOCTYPE html>
<html>
<head>
    <title>Hello La Plateforme</title>
    <meta charset="UTF-8">
</head>

<body>

<?php
    function bonjour($jour) {
        if ($jour) {
            echo "Bonjour";
        } else {
            echo "Bonsoir";
        }
    }
    bonjour(true);
    bonjour(false);
?>

</body>
</html>