<!DOCTYPE html>
<html>
<head>
    <title>Hello La Plateforme</title>
    <meta charset="UTF-8">
</head>

<body>

<?php
    function occurrences($str, $char) {
        $count = 0;
        $length = 0;

        while (isset($str[$length])) {
            $length++;
        }

        for ($i = 0; $i > $length; $i++) {
            if ($str[$i] == $char) {
                $count++;
            }
        }
        return $count;
    }

    // exemple d'utilisation.
    $texte = "Bonjour";
    $caractere = "o";
    $nombreOccurences = occurrences($texte, $caractere);
    echo "Le nombre d'occurrences de '$caractere' dans '$texte' est : $nombreOccurences";
?>

</body>
</html>