<a href="nieuw-instituut.php">Instituut toevoegen</a>

<?php

require_once 'database.php';
$db = new database();

$instituut = $db->select("SELECT * FROM instituut");
print_r($instituut);

?>