<!DOCTYPE html>
<html>
<body>

<?php
    // variables
    $val1 = true;
    $val2 = 12;
    $val3 = "coucou";
    $val4 = 6.78;

    // tableau html
    echo "<table>\n";
    echo "<thead>\n";
    echo "<tr>\n";
    echo "<th>Type</th>\n";
    echo "<th>Nom</th>\n";
    echo "<th>Valeur</th>\n";
    echo "</tr>\n";
    echo "</thead>\n";
    echo "<tbody>\n";
    echo "<tr>\n";
    echo "<td>" . gettype($val1) . "</td>\n";
    echo "<td>Val1</td>\n";
    echo "<td>" . ($val1 ? "true" : "false") . "</td>\n";
    echo "</tr>\n";
    echo "<tr>\n";
    echo "<td>" . gettype($val2) . "</td>\n";
    echo "<td>Val2</td>\n";
    echo "<td>" . $val2 . "</td>\n";
    echo "</tr>\n";
    echo "<tr>\n";
    echo "<td>" . gettype($val3) . "</td>\n";
    echo "<td>Val3</td>\n";
    echo "<td>" . $val3 . "</td>\n";
    echo "</tr>\n";
    echo "<tr>\n";
    echo "<td>" . gettype($val4) . "</td>\n";
    echo "<td>Val4</td>\n";
    echo "<td>" . $val4 . "</td>\n";
    echo "</tr>\n";
    echo "</tbody>\n";
    echo "</table>\n";
?>

</body>
</html>