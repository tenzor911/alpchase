<?php
include('../../../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$packet_id       = $_POST['usrId'];
$packet_name     = $_POST['usrPacket'];
$packet_category = $_POST['usrCategory'];

$checkPacketPresence = mysql_query("SELECT packet_id FROM system_packets WHERE packet_name='$packet_name' LIMIT 1");
if( mysql_num_rows( $checkPacketPresence ) > 0 ) 
{
    echo "Ошибка! Пакет ".$packet_name." уже есть в списке!";   
} 
else 
{
    $sql_save_packet = mysql_query("UPDATE system_packets SET packet_name='$packet_name', packet_type='$packet_category' WHERE packet_id='$packet_id'");
    echo "Пакет успешно сохранен!";
}
?>