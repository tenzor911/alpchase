<?php

include('../setup/mysql_settings.php');
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$dataFromPackets = urldecode($_POST['myData']);
parse_str($dataFromPackets);



if (isset($dataFromPackets)) {
    mysql_query("INSERT INTO services_basket (country_id, service_id, podservice_id) VALUES ('$select_country', '$select_service', '$select_podservice')");
} else {
    exit("Ошибка! Вы не выбрали пакетов!"); 
}

$getQueryId = mysql_query("SELECT sbasket_id FROM services_basket WHERE country_id='$select_country' AND service_id='$select_service' AND podservice_id='$select_podservice'");

$queryId = mysql_fetch_array($getQueryId);
echo $queryId['sbasket_id'];

if (isset($packetNameValue)) 
{
    foreach ($packetNameValue as $key=>$value ) 
    {
        $values_common = mysql_real_escape_string($value); 
        mysql_query("INSERT INTO packets_basket (sbasket_id, packet_id) VALUES ('".$queryId['sbasket_id']."', '$values_common')");
    }
} else {
    die("Ошибка! Вы не выбрали пакетных услуг из списка!");   
}

?>