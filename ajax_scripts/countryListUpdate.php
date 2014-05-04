<?php //начало php-кода
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$sql_get_countries = mysql_query("SELECT * FROM system_countries");

while($row_country = mysql_fetch_array($sql_get_countries)) {
        echo "<option value='".$row_country['country_id']."'>".$row_country['country_name']."</option>";
    }
?>
