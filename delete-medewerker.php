<?php
include "database.php";
$db = new database();

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM medewerker WHERE medewerkercode=:id";
    $placeholder = [
        'id'=> $id
    ];
    $db->delete($sql, $placeholder, "overzicht-medewerker.php");
}



?>