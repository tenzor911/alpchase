<?php
include('../../../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$podservice_id    = $_POST['usrId'];
$podservice_name  = $_POST['usrPodservice'];

$checkPodservicePresence = mysql_query("SELECT podservice_id FROM system_podservice WHERE podservice_name='$podservice_name' LIMIT 1");
if( mysql_num_rows( $checkPodservicePresence ) > 0 ) {
    echo "Ошибка! Подуслуга ".$podservice_name." уже есть в списке!";   
} else {
    $sql_save_podservice = mysql_query("UPDATE system_podservice SET podservice_name='$podservice_name' WHERE podservice_id='$podservice_id'");
    echo "Подуслуга успешно сохранена!";
}
?>