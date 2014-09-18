<?php
include('../../../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$country_name = $_POST['usrCountry'];

$checkCountryPresence = mysql_query("SELECT country_id FROM system_countries WHERE country_name='$country_name' LIMIT 1");
if( mysql_num_rows( $checkCountryPresence ) > 0 ) 
{
    echo "Ошибка! Страна ".$country_name." уже есть в списке!";    
}
else 
{
    $sql_insert_country = mysql_query("INSERT INTO system_countries (country_name) VALUES ('$country_name')");    
    echo "Страна ".$country_name." успешно добавлена!";
}
?>