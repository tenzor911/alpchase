<?php
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$indexCountry = $_REQUEST['selectCountryVal'];
$indexService = $_REQUEST['selectServiceVal'];

mysql_query("INSERT INTO system_con_serv (country_id, service_id) VALUES (".$indexCountry.", ".$indexService.")");

echo "Список успешно добавлен!";
?>