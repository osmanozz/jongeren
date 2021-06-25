
<?php

require_once 'database.php';
$db = new database();

$medewerker = $db->select("SELECT * FROM medewerker");

include 'table_generator.php';

create_table($medewerker, 'medewerker');

?>

<a href="nieuw-medewerker.php">Nieuw medewerker toevoegen</a>

