<?php 

include('../setup/mysql_settings.php');

session_start();

if(!$_SESSION['uname']){
    header("location: ../login.php");
}

echo "Welcome ".$_SESSION['uname']."! <a href='../logout.php'>Logout Here</a></h1>";


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ALPCHASE - Навигационное меню</title>
        <script type="text/javascript" src="../js/ajaxLoadRegistryData.js"> </script>
        <script type="text/javascript" src="../js/jquery-1.10.2.js"> </script>
        <link rel="stylesheet" type="text/css" href="">      
    </head>
    <body>
        <br>
        <hr>
        <input value="Создать новую анкету" onclick="location.href='questionary.php'" type="button">
        <br>
        <input value="Реестр анкет клиентов" onclick="location.href='registry.php'" type="button">
    </body>
</html>
