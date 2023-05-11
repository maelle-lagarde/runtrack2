<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

    <?php
        $str = "Les choses que l'on possède finissent par nous posséder.";
        $string = '';
        $i = -1;

        while (isset($str[$i])) {
            echo $str[$i];
            $i--;
        }
    ?>

</body>
</html>