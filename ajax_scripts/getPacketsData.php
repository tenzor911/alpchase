<?php

include('../setup/mysql_settings.php');
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$dataFromPackets = urldecode($_POST['myData']);

parse_str($dataFromPackets);

if ($select_country == 0) 
{
    echo "Ошибка! Вы не указали страну!";
    exit();
} elseif($select_service == 0) 
{
    echo "Ошибка! Вы не указали услугу!";
    exit();
} elseif($select_podservice == 0) 
{
    echo "Ошибка! Вы не указали подуслугу!";
    exit();
} else {
    $getQueryId = mysql_query("SELECT sbasket_id FROM services_basket WHERE country_id='$select_country' AND service_id='$select_service' AND podservice_id='$select_podservice'");
    if (mysql_num_rows($getQueryId) == 0) 
    {
        if (isset($packetNameValue)) 
        {
            mysql_query("INSERT INTO services_basket (country_id, service_id, podservice_id) VALUES ('$select_country', '$select_service', '$select_podservice')");
            foreach ($packetNameValue as $key=>$value ) 
            {
                $values_common = mysql_real_escape_string($value); 
                $getQueryId = mysql_query("SELECT sbasket_id FROM services_basket WHERE country_id='$select_country' AND service_id='$select_service' AND podservice_id='$select_podservice'");
                $queryId = mysql_fetch_array($getQueryId);
                mysql_query("INSERT INTO packets_basket (sbasket_id, packet_id) VALUES ('".$queryId['sbasket_id']."', '$values_common')");
                echo "Новое соотношение успешно добавлено!";
            }
        } else {
            echo "Ошибка! Ни один из пакетов не указан!";
            exit();    
        }
    } else {
      echo "Ошибка! Данное соотношение уже используется в системе!";
    }
}   
?>