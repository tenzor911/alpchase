<?php
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$name = $_REQUEST['name_select'];

$sql_get_countries = mysql_query("SELECT DISTINCT $name FROM users_customers");

while($row_country = mysql_fetch_array($sql_get_countries)) {
        echo "<option value='".$row_country[$name]."'>".$row_country[$name]."</option>";
    }
?>