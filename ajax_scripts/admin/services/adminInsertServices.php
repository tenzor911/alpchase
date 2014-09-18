<?php
include('../../../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$service_name = $_POST['usrService'];

$checkServicePresence = mysql_query("SELECT service_id FROM system_services WHERE service_name='$service_name' LIMIT 1");
if( mysql_num_rows( $checkServicePresence ) > 0 ) 
{
    echo "Ошибка! Страна ".$service_name." уже есть в списке!";    
} 
else 
{
    $sql_insert_service = mysql_query("INSERT INTO system_services (service_name) VALUES ('$service_name')");    
    echo "Услуга ".$service_name." успешно добавлена!";
}
?>