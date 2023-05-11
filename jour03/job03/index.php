<!DOCTYPE html>
<html>
<body>

    <?php
        $str = "I'm sorry Dave I'm afraid I can't do that";
        $voyelles = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];

        // boucle qui affiche uniquement les voyelles. boucle à l'intérieur d'une boucle.
        while(isset($str[$i])) {
            if (in_array($str[$i], $voyelles)) {
                echo $str[$i];
            }
            $i++;
        }
    ?>

</body>
</html>