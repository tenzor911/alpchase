<?php
include('../../../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$role_id    = $_POST['usrId'];
$role_name  = $_POST['usrRole'];

$checkRolePresence = mysql_query("SELECT role_id FROM system_roles WHERE role_name='$role_name' LIMIT 1");
if( mysql_num_rows( $checkRolePresence ) > 0 ) {
    echo "Ошибка! Роль ".$role_name." уже есть в списке!";   
} else {
    $sql_save_role = mysql_query("UPDATE system_roles SET role_name='$role_name' WHERE role_id='$role_id'");
    echo "Роль успешно сохранена!";
}
?>