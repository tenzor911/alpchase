<?php
class registryLoaderGeneral 
{
    function loadRegistry()
    {
        $result = mysql_query("SELECT * FROM users_customers WHERE quest_status != 'черновик' ORDER BY customer_id DESC");
        while($data = mysql_fetch_assoc($result))
        {       
            $order_basket = mysql_query("SELECT system_countries.country_name, system_services.service_name, system_podservice.podservice_name
                FROM system_services 
                INNER JOIN (system_podservice 
                INNER JOIN (users_customers 
                INNER JOIN (system_countries 
                INNER JOIN order_basket ON system_countries.country_id = order_basket.country_id) ON users_customers.customer_id = order_basket.customer_id) ON system_podservice.podservice_id = order_basket.podservice_id) ON system_services.service_id = order_basket.service_id WHERE (((order_basket.customer_id)=".$data['customer_id']."));");
        
            echo "<tr>";
            echo    "<td width='20'><font size='2'>".$data['customer_id']."</font></td>";
            echo    "<td width='60'><font size='2'>".$data['quest_date']."</td>";
            echo    "<td width='60'><font size='2'>".$data['quest_status']."</td>";
            echo    "<td width='60'><font size='2'>".$data['customer_visits']."</td>";
            echo    "<td width='100'><font size='2'>".$data['customer_surn']." ".$data['customer_name']."</td>";
            echo    "<td width='120'><font size='2'>".$data['customer_email']."</td>";
            echo    "<td width='80'><font size='2'>".$data['customer_primaryphone']."</td>";
            echo    "<td width='120'><font size='2'>".$data['customer_compname']."</td>";
            echo    "<td width='120'><font size='2'>".$data['customer_country']."</td>";
            echo    "<td width='120'><font size='2'>".$data['customer_city']."</td>";
            echo    "<td width='60'>";
            while ($basket_data = mysql_fetch_assoc($order_basket)) 
            {
                echo "<hr>";
                echo "<font size='2'>".$basket_data['country_name']." - ".$basket_data['service_name']." - ".$basket_data['podservice_name']."</font><br>"; 
                echo "<hr>";
            }
            echo    "</td>";
            echo    "<td width='20'><center><a href='#'><img src='../icons/bullet_magnify.png' alt='предпросмотр' title='предпросмотр'></a></center></td>";
            echo    "<td width='20'><center><a href='../system/registryEdit.php?edit=".$data['customer_id']."'><img src='../icons/bullet_edit.png' alt='редактировать' title='редактировать'></a></center></td>";
            echo    "<td width='20'><center><a href='#'><img src='../icons/bullet_cross.png' onclick='deleteFromRegistry(".$data['customer_id'].")' alt='удалить' title='удалить'></a></center></td>";
            echo "</tr>";
        }
    }
}
