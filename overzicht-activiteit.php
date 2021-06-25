
<?php

require_once 'database.php';
$db = new database();

$act = $db->select("SELECT * FROM activiteit");

include 'table_generator.php';

create_table($act, 'activiteit');

?>

<a href="nieuw-activiteit.php">Nieuw activiteit toevoegen</a>

