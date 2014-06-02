<?php 

include("config.php");

$delID = $_REQUEST["delete"];

mysql_query("DELETE FROM questions WHERE ID = '$delID'");

header( 'Location: index.php' );

?>