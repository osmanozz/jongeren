<?php


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'database.php';
    $db = new database();

    $sql = "INSERT INTO jongere VALUES (:id, :naam, :tussenvoegsel, :achternaam, :inschijfdatum)";
    $placeholder = [
    'id'=> NULL,
    'naam'=> $_POST['naam'],
    'tussenvoegsel'=> $_POST['tussenvoegsel'],
    'achternaam'=> $_POST['achternaam'],
    'inschijfdatum'=> $_POST['inschijfdatum'],

];
$db->insert($sql, $placeholder, "overzicht-jongere.php");
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
        <input type="text" name="naam" placeholder="naam">
        <input type="text" name="tussenvoegsel" placeholder="tussenvoegsel">
        <input type="text" name="achternaam" placeholder="achternaam">
        <input type="text" name="inschijfdatum" placeholder="datum">
        <input type="submit" value="Verzenden">
    </form>
</body>
</html>