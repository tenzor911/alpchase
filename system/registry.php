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
        <title>ALPCHASE - Реестр анкет клиентов</title>
        <script type="text/javascript" src="../js/ajaxLoadRegistryData.js"> </script>
        <script type="text/javascript" src="../js/jquery-1.10.2.js"> </script>
        <link rel="stylesheet" type="text/css" href="../css/styleRegistry.css">   </link>   
    </head>
    <body onload="obnovit()">
        <hr></hr>
            <br></br>
        <div id="data_field" align="center">Загрузка данных...</div>
    </body>
</html>
