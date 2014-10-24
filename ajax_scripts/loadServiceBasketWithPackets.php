<?php
include('../../setup/mysql_settings.php');

class loadServiceBasketWithPackets 
{
    function loadData() 
    {

        mysql_query("SET NAMES 'utf8'");
        mysql_query("SET CHARACTER SET 'utf8'");

         $servBasketData = mysql_query("

    SELECT services_basket.sbasket_id,
           system_countries.country_name,
           system_services.service_name,
           system_podservice.podservice_name,
           system_packets.packet_name,
           system_packets.price_common,
           system_packets.price_econom,
           system_packets.price_standart,
           system_packets.price_vip,
           packets_basket.sbasket_id
    FROM system_services
    INNER JOIN (system_podservice
                INNER JOIN (system_packets
                INNER JOIN (system_countries
                INNER JOIN (services_basket
                INNER JOIN packets_basket ON 
    services_basket.sbasket_id = packets_basket.sbasket_id) ON 
    system_countries.country_id = services_basket.country_id) ON 
    system_packets.packet_id = packets_basket.packet_id) ON 


       system_podservice.podservice_id = services_basket.podservice_id) ON 
        system_services.service_id = services_basket.service_id
        ORDER BY services_basket.sbasket_id ASC;");

        
    $previous_sbasket_id = -1;     
    while ($result = mysql_fetch_array($servBasketData)) 
    {
        if($previous_sbasket_id != $result['sbasket_id'])
        {  
            echo "<table width='1100' border='1' cellspacing='0' cellpadding='0' align='center'>";
            echo "<tr><td colspan='5'><center>Соотношение № <b>".$result['sbasket_id']."</b></center></td><tr>";
            echo    "<tr>";
            echo        "<td width='250'><center><b>Страна</b></center></td>";
            echo        "<td colspan='2'><center><b>Услуга</b></center></td>";
            echo        "<td colspan='2'><center><b>Подуслуга</b></center></td>";
            echo    "</tr>";
            echo    "<tr>";
            echo        "<td><center>".$result['country_name']."</center></td>";
            echo        "<td colspan='2'><center>".$result['service_name']."</center></td>";
            echo        "<td colspan='2'><center>".$result['podservice_name']."</center></td>";
            echo    "</tr>";
            echo    "<tr>";
            echo        "<td><center><b>Имя пакета</b></center></td>";
            echo        "<td width='200'><center><b>Цена без категории</b></center></td>";
            echo        "<td width='200'><center><b>Цена Эконом</b></center></td>";
            echo        "<td width='200'><center><b>Цена Стандарт</b></center></td>";
            echo        "<td width='200'><center><b>Цена Вип</b></center></td>";
            echo    "</tr>";
        }    
        echo    "<tr>";
        echo        "<td><center>".$result['packet_name']."</center></td>";
        echo        "<td><center>".$result['price_common']."</center></td>";
        echo        "<td><center>".$result['price_econom']."</center></td>";
        echo        "<td><center>".$result['price_standart']."</center></td>";
        echo        "<td><center>".$result['price_vip']."</center></td>";
        echo    "</tr>";
        
        
        $previous_sbasket_id= $result['sbasket_id'];
    } 
    echo "</table>";
    }
}
?>