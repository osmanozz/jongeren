<ul>
  <li><a href="overzicht-instituut.php">Overzicht instituut</a></li>
  <li><a href="overzicht-activiteit.php">Overzicht activiteit</a></li>
  <li><a href="overzicht-jongere.php">Overzicht jongere</a></li>
  <li><a href="overzicht-medewerker.php">Overzicht medewerker</a></li>
  
  
 
</ul>

<?php
session_start();
    echo "Welkom " . $_SESSION['username'];

?>