<?php 

include('../setup/mysql_settings.php');

session_start();

if(!$_SESSION['uname']){
    header("location: ../index");
}

echo "Welcome ".$_SESSION['uname']."! <a href='../logout'>Logout Here</a></h1>";


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-gb" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ALPCHASE - Навигационное меню</title>
        <script type="text/javascript" src="../js/ajaxLoadRegistryData.js"> </script>
        <script type="text/javascript" src="../js/jquery/jquery-1.10.2.js"> </script>
        <!--<link rel="stylesheet" type="text/css" href="">      !-->
    </head>
    <body>
        <br>
        <hr>
        <input value="Создать новую анкету" onclick="location.href='questionary'" type="button">
        <br>
        <input value="Реестр анкет клиентов" onclick="location.href='registry'" type="button">
    </body>
</html>
