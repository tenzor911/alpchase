<?php 
include("config.php");

$in_text = $_REQUEST["text"];

$in_date = date('j.m.Y G:i');

$inr = $_GET['a2'];

mysql_query("INSERT INTO questions (text, Date, Reason) VALUES ('$in_text', '$in_date', '$inr')");

header( 'Location: index.php' );
 ?>