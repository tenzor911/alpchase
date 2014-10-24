<?php 
include('../setup/mysql_settings.php');

mysql_query( "SET NAMES 'utf8'" );
mysql_query( "SET CHARACTER SET 'utf8'" );

$service_id = intval( $_REQUEST['service_select'] );
$sql_get_podservices = mysql_query( "SELECT system_podservice.podservice_id, system_podservice.podservice_name FROM system_podservice INNER JOIN system_serv_pod ON system_podservice.podservice_id = system_serv_pod.podservice_id AND system_serv_pod.service_id = '{$service_id}'" );
echo "<option value=\"0\">Услуга не назначена</option>";
while( $row_service = mysql_fetch_array( $sql_get_podservices ) )	{	
	echo "<option value=\"{$row_service['podservice_id']}\">{$row_service['podservice_name']}</option>";
	}
?>