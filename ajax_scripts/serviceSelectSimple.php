<?php //начало php-кода
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$sql_get_services = mysql_query("SELECT * FROM system_services ORDER BY service_id ASC");

while($row_service = mysql_fetch_array($sql_get_services)) {
        echo "<option value='".$row_service['service_id']."'>".$row_service['service_id']." - ".$row_service['service_name']."</option>";
}
?>
