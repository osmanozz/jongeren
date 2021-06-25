
<?php

require_once 'database.php';
$db = new database();

$instituut = $db->select("SELECT * FROM instituut");

include 'table_generator.php';

create_table($instituut, 'instituut');

?>

<a href="nieuw-instituut.php">Nieuw instituut toevoegen</a>

