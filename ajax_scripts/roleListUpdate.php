<?php //начало php-кода
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$sql_get_roles = mysql_query("SELECT * FROM system_roles");

while($row_role = mysql_fetch_array($sql_get_roles)) {
        echo "<option value='".$row_role['role_name']."'>".$row_role['role_name']."</option>";
}
?>
