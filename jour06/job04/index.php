<!DOCTYPE html>
<html>
<head>
    <title>Hello La Plateforme</title>
    <meta charset="UTF-8">
</head>

<body>

<?php
    function calcule($num1, $operateur, $num2) {
        if ($operateur === '+') {
            return $num1 + $num2;
        } elseif ($operateur == '-') {
            return $num1 - $num2;
        } elseif ($operateur == '*') {
            return $num1 * $num2;
        } elseif ($operateur == '/') {
            return $num1 / $num2;
        } elseif ($operateur == "%") {
            return $num1 % $num2;
        } else {
            return "Operateur invalide !";
        }
}

// exemples d'utilisation.
$resultat1 = calcule(5, '+', 2);
echo "Résultat 1 : " . $resultat1 . "<br>";

$resultat2 = calcule(5, '-', 2);
echo "Résultat 2 : " . $resultat2 . "<br>";

$resultat3 = calcule(5, '*', 2);
echo "Résultat 3 : " . $resultat3 . "<br>";

$resultat4 = calcule(5, '/', 2);
echo "Résultat 4 : " . $resultat4 . "<br>";

?>

</body>
</html>