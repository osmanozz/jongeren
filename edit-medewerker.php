    
    <?php
    include_once "database.php";
    $db = new database();
   
  
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $medcode = $_POST['medewerkercode'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "UPDATE medewerker SET username=:username, password=:password WHERE medewerkercode=:medewerkercode";

            $placeholders = [
                'medewerkercode' => $medcode,
                'username' => $username,
                'password' => $password
            ];
            $db->edit($sql,$placeholders, "overzicht-medewerker.php");

        }
        ?>

<form method="POST">
                <!-- doorgaan met setten van value met ternary operator -->
        <input type="hidden" name="medewerkercode" value="<?php echo $_GET['id'] ?>">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder='password'>
        <input type="submit" name="submit" value="Wijzig">
    </form>