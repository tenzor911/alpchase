<?php 

include('../setup/mysql_settings.php');

session_start();

if(!$_SESSION['email']){
    header("location: ../index");
}

echo "Welcome ".$_SESSION['email']."! <a href='../logout'>Logout Here</a></h1>";


?>