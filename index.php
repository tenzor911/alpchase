<?php

session_start();

include('./classes/class.loginsecretary.php');

$login = new Login();

if($login->isLoggedIn())
{
    echo "Members Area";
}
else 
{
    echo "Error!";
}
echo "<a href=logout.php>logout</a>";
?>
