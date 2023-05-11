<!DOCTYPE html>
<html>
<body>

    <?php
        $str = 'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.';
        // initialisation à 0.
        $i = 0;
        // boucle qui s'exécute tant que le caractère $i n'est pas vide.
        while ($str[$i] != "") {
            echo $str[$i];
            // on incrémente la valeur $i de 2 pour passer au caractère suivant.
            $i += 2;
            }
    ?>

</body>
</html>