<?php //начало php-кода
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$basket_id = $_REQUEST['basket_id'];
$sql_delete_item = mysql_query("DELETE FROM order_basket WHERE basket_id = '$basket_id'");
echo $basket_id;
?>