<?php

session_start();

if(isset($_SESSION['username']) && $_SESSION['is_logged_in']){
    echo "Welkom " . $_SESSION['username'];
}   else{
    echo "Something went wrong..";
}
?>