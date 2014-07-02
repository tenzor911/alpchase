<?php //начало php-кода
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$item_id = $_REQUEST['id_to_delete'];

$sql_delete_item = mysql_query("DELETE * FROM order_basket WHERE customer_id = '$item_id'");

?>