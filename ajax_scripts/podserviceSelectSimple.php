<?php //начало php-кода
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$sql_get_podservices = mysql_query("SELECT * FROM system_podservice ORDER BY podservice_id ASC");

while($row_podservice = mysql_fetch_array($sql_get_podservices)) {
        echo "<option value='".$row_podservice['podservice_id']."'>".$row_podservice['podservice_id']." - ".$row_podservice['podservice_name']."</option>";
}
?>
