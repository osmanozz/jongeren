<?php
include "database.php";
$db = new database();

if (isset($_GET['id'])) {

    $jongerecode = $_GET['id'];
    $sql = "DELETE FROM jongere WHERE jongerecode=:id";
    $placeholder = [
        'id'=> $jongerecode
    ];
    $db->delete($sql, $placeholder, "overzicht-jongere.php");
}



?>