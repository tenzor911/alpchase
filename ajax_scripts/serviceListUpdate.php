<?php

include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$country_id = $_REQUEST["country_select"];
$sql_get_services = mysql_query("
SELECT system_services.service_id, system_services.service_name, system_countries.country_name
FROM system_services
INNER JOIN system_con_serv ON system_services.service_id = system_con_serv.service_id
AND system_con_serv.country_id = '$country_id'
INNER JOIN system_countries ON system_con_serv.country_id = system_countries.country_id");

while($row_service = mysql_fetch_array($sql_get_services)){
    echo "<option value='".$row_service['service_id']."'>".$row_service['service_name']."</option>";
}
?>