<?php


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'database.php';
    $db = new database();

    $sql = "INSERT INTO medewerker VALUES (:medewerkercode, :username, :password)";
    $placeholder = [
    'medewerkercode'=> NULL,
    'username'=> $_POST['username'],
    'password'=> $_POST['password']
];
$db->insert($sql, $placeholder, "overzicht-medewerker.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuw instituut toevoegen</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="username">
        <input type="text" name="password">
        <input type="submit" value="Verzenden">
    </form>
</body>
</html>