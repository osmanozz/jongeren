<?php
include "database.php";
$db = new database();

if (isset($_GET['id'])) {

    $instcode = $_GET['id'];
    $sql = "DELETE FROM instituut WHERE instituutcode=:id";
    $placeholder = [
        'id'=> $instcode
    ];
    $db->delete($sql, $placeholder, "overzicht-instituut.php");
}



?>