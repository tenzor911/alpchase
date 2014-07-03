<?php //начало php-кода
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$user_id        = $_REQUEST['user_index'];
$country_id     = $_REQUEST['country_index'];
$service_id     = $_REQUEST['service_index'];
$podservice_id  = $_REQUEST['podservice_index'];

$sql_delete_item = mysql_query("DELETE FROM order_basket WHERE customer_id = '$user_id' AND country_id= '$country_id' AND service_id = '$service_id' AND podservice_id = '$podservice_id'");

echo $sql_delete_item;

?>