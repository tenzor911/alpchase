<?php
include('../../../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$role_name = $_POST['usrRole'];

$checkRolePresence = mysql_query("SELECT role_id FROM system_roles WHERE role_name='$role_name' LIMIT 1");
if( mysql_num_rows( $checkRolePresence ) > 0 ) 
{
    echo "Ошибка! Роль ".$role_name." уже есть в списке!";    
} 
else 
{
    $sql_insert_role = mysql_query("INSERT INTO system_roles (role_name) VALUES ('$role_name')");    
    echo "Роль ".$role_name." успешно добавлена!";
}
?>