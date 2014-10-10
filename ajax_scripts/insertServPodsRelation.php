<?php
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$indexService = $_POST['selectServiceVal'];
$indexPodservice = $_POST['selectPodserviceVal'];

mysql_query("INSERT INTO system_serv_pod (service_id, podservice_id) VALUES (".$indexService.", ".$indexPodservice.")");

echo "Список успешно добавлен!";
?>