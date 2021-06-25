    
    <?php
    include_once "database.php";
    $db = new database();
   
  
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $actcode = $_POST['activiteitcode'];
            $actnaam = $_POST['activiteit'];

            $sql = "UPDATE activiteit SET activiteit=:activiteit WHERE activiteitcode=:activiteitcode";

            $placeholders = [
                'activiteitcode' => $actcode,
                'activiteit' => $actnaam
            ];
            $db->edit($sql,$placeholders, "overzicht-activiteit.php");

        }
        ?>

<form method="POST">
                <!-- doorgaan met setten van value met ternary operator -->
        <input type="hidden" name="activiteitcode" value="<?php echo $_GET['id'] ?>">
        <input type="text" name="activiteit" placeholder="naam">
        <input type="submit" name="submit" value="Wijzig">
    </form>