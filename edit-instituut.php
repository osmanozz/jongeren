    
    <?php
    include_once "database.php";
    $db = new database();
   
  
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $instcode = $_POST['instituutcode'];
            $instituut = $_POST['instituut'];
            $telno = $_POST['instituuttelefoon'];

            $sql = "UPDATE instituut SET instituut=:instituut, instituuttelefoon=:instituuttelefoon WHERE instituutcode=:instituutcode";

            $placeholders = [
                'instituutcode' => $instcode,
                'instituut' => $instituut,
                'instituuttelefoon' => $telno
            ];
            $db->edit($sql,$placeholders, "overzicht-instituut.php");

        }
        ?>

<form method="POST">
                <!-- doorgaan met setten van value met ternary operator -->
        <input type="hidden" name="instituutcode" value="<?php echo $_GET['id'] ?>">
        <input type="text" name="instituut" placeholder="instituut">
        <input type="text" name="instituuttelefoon" placeholder='telno'>
        <input type="submit" name="submit" value="Wijzig">
    </form>