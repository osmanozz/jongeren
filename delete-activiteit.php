<?php
include "database.php";
$db = new database();

if (isset($_GET['id'])) {

    $actcode = $_GET['id'];
    $sql = "DELETE FROM activiteit WHERE activiteitcode=:id";
    $placeholder = [
        'id'=> $actcode
    ];
    $db->delete($sql, $placeholder, "overzicht-activiteit.php");
}



?>