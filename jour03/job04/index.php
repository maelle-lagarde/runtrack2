<!DOCTYPE html>
<html>
<body>

    <?php
        // on définit la chaîne de caractères.
        $str = "Dans l'espace, personne ne vous entend crier";
        // on initialise le compteur de caractères.
        $nb_caracteres = 0;

        // on parcourt la chaîne de caractères.
        while (isset($str[$nb_caracteres])) {
            // on incrémente le compteur de caractères.
            $nb_caracteres++;
        }

        // on affiche le résultat.
        echo "Le nombre de caractères dans la chaîne est de : " . $nb_caracteres;
    ?>

</body>
</html>