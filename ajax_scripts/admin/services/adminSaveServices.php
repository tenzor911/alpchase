<?php
include('../../../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$service_id    = $_POST['usrId'];
$service_name  = $_POST['usrService'];

$checkServicePresence = mysql_query("SELECT service_id FROM system_services WHERE service_name='$service_name' LIMIT 1");
if( mysql_num_rows( $checkServicePresence ) > 0 ) {
    echo "Ошибка! Услуга ".$service_name." уже есть в списке!";   
} else {
    $sql_save_service = mysql_query("UPDATE system_services SET service_name='$service_name' WHERE service_id='$service_id'");
    echo "Услуга успешно сохранена!";
}
?>