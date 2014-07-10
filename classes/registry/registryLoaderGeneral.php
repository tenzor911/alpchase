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
            echo    "<td width='40'><center>".$data['customer_id']."</center></td>";
            echo    "<td width='60'><center>".$data['quest_date']."</center></td>";
            echo    "<td width='100'><center>".$data['quest_status']."</center></td>";
            echo    "<td width='200'><center>".$data['customer_surn']." ".$data['customer_name']."</center></td>";
            echo    "<td width='180'><center>".$data['customer_email']."</center></td>";
            echo    "<td width='140'><center>".$data['customer_primaryphone']."</center></td>";
            echo    "<td width='200'><center>".$data['customer_compname']."</center></td>";
            echo    "<td width='160'><center>".$data['customer_country']."</center></td>";
            echo    "<td width='160'><center>".$data['customer_city']."</center></td>";
            echo    "<td width='400'><center>";
            while ($basket_data = mysql_fetch_assoc($order_basket)) 
            {
                echo $basket_data['country_name']." - ".$basket_data['service_name']." - ".$basket_data['podservice_name']."<br>"; 
            }
            echo    "</center></td>";
            echo    "<td width='40'><center><a href='../system/registryEdit.php?edit=".$data['customer_id']."'><img src='../icons/bullet_edit.png' alt='редактировать' title='редактировать'></a></center></td>";
            echo    "<td width='40'><center><a href='../system/registrySendToDraft.php?change=".$data['customer_id']."'><img src='../icons/script_stop.png' alt='отправить в черновики' title='отправить в черновики'></a></center></td>";
            echo    "<td width='40'><center><a href='#'><img src='../icons/bullet_cross.png' onclick='deleteFromRegistry(".$data['customer_id'].")' alt='удалить' title='удалить'></a></center></td>";
            echo "</tr>";
        }
    }
}
