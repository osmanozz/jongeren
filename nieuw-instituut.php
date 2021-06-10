<?php

session_start();

if(isset($_SESSION['username']) && $_SESSION['is_logged_in']){
    echo "Welkom " . $_SESSION['username'];
}   else{
    echo "Something went wrong..";
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'database.php';
    $db = new database();

    $sql = "INSERT INTO instituut VALUES (:id, :instituut, :telefoon)";
    $placeholder = [
    'id'=> NULL,
    'instituut'=> $_POST['instituut'],
    'telefoon'=> $_POST['telefoon']
];
$db->insert($sql, $placeholder);
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
    <form action="nieuw-instituut.php" method="POST">
        <input type="text" name="instituut">
        <input type="text" name="telefoon">
        <input type="submit" value="Verzenden">
    </form>
</body>
</html>