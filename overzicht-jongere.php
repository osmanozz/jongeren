
<?php

require_once 'database.php';
$db = new database();

$jongere = $db->select("SELECT * FROM jongere");

include 'table_generator.php';

create_table($jongere, 'jongere');

?>

<a href="nieuw-jongere.php">Nieuw jongere toevoegen</a>

