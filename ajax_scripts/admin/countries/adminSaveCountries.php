<?php
include('../../../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$country_id    = $_POST['usrId'];
$country_name  = $_POST['usrCountry'];

$checkCountryPresence = mysql_query("SELECT country_id FROM system_countries WHERE country_name='$country_name' LIMIT 1");
if( mysql_num_rows( $checkCountryPresence ) > 0 ) 
{
    echo "Ошибка! Страна ".$country_name." уже есть в списке!";   
} 
else 
{
    $sql_save_country = mysql_query("UPDATE system_countries SET country_name='$country_name' WHERE country_id='$country_id'");
    echo "Страна успешно сохранена!";
}
?>