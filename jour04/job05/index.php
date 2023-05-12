<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>

<form action="" method="post">
    <label for="username">Username : <input type="text" name="username" id="username"></label><br>
    <label for="password">Password : <input type="text" name="password" id="password"></label><br>
    <input type="submit" value="Se connecter">
</form>

<?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == 'John' && $password == 'Rambo') {
            echo "Ce n'est pas ma guerre";
        } else {
            echo "Votre pire cauchemar";
        }
    }
?>

</body>

</html>