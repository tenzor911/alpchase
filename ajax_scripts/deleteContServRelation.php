<?php
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$index = $_REQUEST['idToDelete'];

mysql_query("DELETE FROM system_con_serv WHERE id_con_ser = ".$index."");

echo "Список успешно удалён!";
?>