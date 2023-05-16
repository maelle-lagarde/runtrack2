<!DOCTYPE html>
<html>
<head>
    <title>Leet Speak</title>
    <meta charset="UTF-8">
</head>

<body>

<?php
    function leetSpeak($str) {
        $leetMapping = array(
            'A' => '4',
            'a' => '4',
            'B' => '8',
            'b' => '8',
            'E' => '3',
            'e' => '3',
            'G' => '6',
            'g' => '6',
            'L' => '1',
            'l' => '1',
            'S' => '5',
            's' => '5',
            'T' => '7',
            't' => '7'
        );

        $leetStr = '';
        $index = 0;
        while (isset($str[$index])) {
            $char = $str[$index];
            if (isset($leetMapping[$char])) {
                $leetStr .= $leetMapping[$char];
            } else {
                $leetStr .= $char;
            }
            $index++;
        }

        return $leetStr;
    }

    // exemple d'utilisation de la fonction leetSpeak.
    $texte = "Leet Speak";
    $texteConverti = leetSpeak($texte);
    echo "Texte converti en leet speak : " . $texteConverti;
?>

</body>
</html>