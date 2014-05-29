<?php 

include('../setup/mysql_settings.php');

session_start();

if(!$_SESSION['email']){
    header("location: ../customer");
}

echo "Welcome ".$_SESSION['email']."! <a href='../exit'>Logout Here</a></h1>";
echo "<hr>";
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf8">    
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="css/grayhint.css">
        <script type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
    </head>
    <body>
    Коммерческое предложение.
    <br>
    ФИО:
    <br>
    Компания:
    <br>
    Дата:
    </body>
</html>