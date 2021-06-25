    
    <?php
    include_once "database.php";
    $db = new database();
   
  
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $code = $_POST['jongerecode'];
            $naam = $_POST['naam'];
            $tussenvoegsel = $_POST['tussenvoegsel'];
            $achternaam = $_POST['achternaam'];
            $datum = $_POST['datum'];

            $sql = "UPDATE jongere SET naam=:naam, tussenvoegsel=:tussenvoegsel, achternaam=:achternaam, inschijfdatum=:inschijfdatum 
            WHERE jongerecode=:jongerecode";

            $placeholders = [
                'jongerecode' => $code,
                'naam' => $naam,
                'tussenvoegsel' => $tussenvoegsel,
                'achternaam' => $achternaam,
                'inschijfdatum' => $datum
            ];
            $db->edit($sql,$placeholders, "overzicht-jongere.php");

        }
        ?>

<form method="POST">
                <!-- doorgaan met setten van value met ternary operator -->
        <input type="hidden" name="jongerecode" value="<?php echo $_GET['id'] ?>">
        <input type="text" name="naam" placeholder="naam">
        <input type="text" name="tussenvoegsel" placeholder="tussenvoegsel">
        <input type="text" name="achternaam" placeholder='achternaam'>
        <input type="text" name="datum" placeholder='datum'>
        <input type="submit" name="submit" value="Wijzig">
    </form>