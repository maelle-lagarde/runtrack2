<!DOCTYPE html>
<html>
<head>
    <title>Jeu du Morpion</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            width: 50px;
            height: 50px;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>

<body>
<?php
    // définition des variables.
    $grid = [
        ['-','-','-'],
        ['-','-','-'],
        ['-','-','-']
    ];

    $currentPlayer = 'X';
    $winner = null;
    $draw = false;

    // vérifier si le formulaire a été soumis.
    if(isset($_POST['action'])) {
        // récupérer les coordonnées de la case.
        $row = $_POST['row'];
        $col = $_POST['col'];

        // vérifier si la case est vide.
        if($grid[$row][$col] === '-') {
            // mettre à jour la grille avec le symbole du joueur actuel.
            $grid[$row][$col] = $currentPlayer;

            // vérifier si le joueur actuel a gagné.
            if(checkWinner($grid, $currentPlayer)) {
                $winner = $currentPlayer;
            } elseif(checkDraw($grid)) {
                // vérifier si c'est un match nul.
                $draw = true;
            } else {
                // changer de joueur.
                $currentPlayer = ($currentPlayer === 'X') ? 'O' : 'X';
            }
        }
    }

    // vérifier si le bouton de réinitialisation a été cliqué.
    if(isset($_POST['reset'])) {
        // réinitialiser les variables du jeu.
        $grid = [
            ['-','-','-'],
            ['-','-','-'],
            ['-','-','-']
        ];
        $currentPlayer = 'X';
        $winner = null;
        $draw = false;
    }

    // fonction pour vérifier si un joueur a gagné.
    function checkWinner($grid, $player) {
        // vérifier les lignes.
        for($i = 0; $i < 3; $i++) {
            if($grid[$i][0] === $player && $grid[$i][1] === $player && $grid[$i][2] === $player) {
                return true;
            }
        }

        // vérifier les colonnes.
        for($j = 0; $j < 3; $j++) {
            if($grid[0][$j] === $player && $grid[1][$j] === $player && $grid[2][$j] === $player) {
                return true;
            }
        }

        // vérifier les diagonales.
        if(($grid[0][0] === $player && $grid[1][1] === $player && $grid[2][2] === $player) ||
            ($grid[0][2] === $player && $grid[1][1] === $player && $grid[2][0] === $player)) {
            return true;
        }

        return false;
    }

    // fonction pour vérifier si c'est un match nul.
    function checkDraw($grid) {
        foreach($grid as $row) {
            if(in_array('-', $row)) {
                return false;
            }
        }
        return true;
    }
?>

<h1>Jeu du Morpion</h1>

<?php
    if($winner) {
        echo "<h2>$winner a gagné !</h2>";
    } elseif($draw) {
        echo "<h2>Match nul !</h2>";
    }
?>

<form method="post" action="">
    <table>
        <?php for($i = 0; $i < 3; $i++) : ?>
            <tr>
                <?php for($j = 0; $j < 3; $j++) : ?>
                    <td>
                        <?php if($grid[$i][$j] === '-') : ?>
                            <button type="submit" name="action" value="play">
                                <input type="hidden" name="row" value="<?php echo $i; ?>">
                                <input type="hidden" name="col" value="<?php echo $j; ?>">
                                -
                            </button>
                        <?php else : ?>
                            <?php echo $grid[$i][$j]; ?>
                        <?php endif; ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    <button type="submit" name="reset" value="reset">Réinitialiser la partie</button>
</form>

</body>
</html>