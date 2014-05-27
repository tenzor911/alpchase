<?php 

include('../setup/mysql_settings.php');

session_start();

if(!$_SESSION['email']){
    header("location: ../customer");
}

echo "Welcome ".$_SESSION['email']."! <a href='../exit'>Logout Here</a></h1>";


?>