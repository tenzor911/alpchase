<?php 
session_start();
echo "Welcome!";
echo "<br>";
echo $_SESSION['uname'];
echo "<br>";
echo "<a href='../logout.php'>Logout Here</a></h1>";

if(!$_SESSION['uname']){

header("location: ../login.php");
}
?>
