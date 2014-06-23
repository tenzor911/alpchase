<?php

include ('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

if( isset($_POST["parameter"]) )
{
    $parameter = $_REQUEST['parameter'];
    $filter = $_REQUEST['filter_parameter_select'];
    
    
    
    $result = mysql_query("SELECT * FROM users_customers WHERE $filter = '$parameter' AND quest_status != 'черновик'");
    
    echo "
    <table width='2000' border='1' cellpadding='0' cellspacing='0' align='center'>
        <tr>
            <td width='40'><b>№</b></td>
            <td width='60'><b>Дата</b></td>
            <td width='100'><b>Статус</b></td>
            <td width='300'><b>ФИО</b></td>
            <td width='180'><b>Email</b></td>
            <td width='140'><b>Телефон</b></td>
            <td width='200'><b>Наименование компании</b></td>
            <td width='160'><b>Страна обращения</b></td>
            <td width='160'><b>Город обращения</b></td>
            <td width='400'><b>Заказ клиента</b></td>
        </tr>";


    while($data = mysql_fetch_assoc($result))
    {   
        
        $order_basket = mysql_query("SELECT system_countries.country_name, system_services.service_name, system_podservice.podservice_name
        FROM system_services 
        INNER JOIN (system_podservice 
        INNER JOIN (users_customers 
        INNER JOIN (system_countries 
        INNER JOIN order_basket ON system_countries.country_id = order_basket.country_id) ON users_customers.customer_id = order_basket.customer_id) ON system_podservice.podservice_id = order_basket.podservice_id) ON system_services.service_id = order_basket.service_id WHERE (((order_basket.customer_id)=".$data['customer_id']."));");

        echo "<tr>";
        echo    "<td width='40'>".$data['customer_id']."</td>";
        echo    "<td width='60'>".$data['quest_date']."</td>";
        echo    "<td width='100'>".$data['quest_status']."</td>";
        echo    "<td width='200'>".$data['customer_surn']." ".$data['customer_name']." ".$data['customer_midd']."</td>";
        echo    "<td width='180'>".$data['customer_email']."</td>";
        echo    "<td width='140'>".$data['customer_primaryphone']."</td>";
        echo    "<td width='200'>".$data['customer_compname']."</td>";
        echo    "<td width='160'>".$data['customer_country']."</td>";
        echo    "<td width='120'>".$data['customer_city']."</td>";
        echo    "<td width='400'>";
        while ($basket_data = mysql_fetch_assoc($order_basket)) {
            echo $basket_data['country_name']." ".$basket_data['service_name']." ".$basket_data['podservice_name']."<br>"; 
        }
        echo "</td>";
    }
    echo "</table>";
    
} elseif (isset($_POST["company_search_name"])){
    $company_data = $_REQUEST['company_search_name'];
    $result = mysql_query("SELECT * FROM users_customers WHERE customer_compname LIKE '%$company_data%' AND quest_status != 'черновик'");
    
echo "
    <table width='2000' border='1' cellpadding='0' cellspacing='0' align='center'>
        <tr>
            <td width='40'><b>№</b></td>
            <td width='60'><b>Дата</b></td>
            <td width='100'><b>Статус</b></td>
            <td width='300'><b>ФИО</b></td>
            <td width='180'><b>Email</b></td>
            <td width='140'><b>Телефон</b></td>
            <td width='200'><b>Наименование компании</b></td>
            <td width='160'><b>Страна обращения</b></td>
            <td width='160'><b>Город обращения</b></td>
            <td width='400'><b>Заказ клиента</b></td>
        </tr>";


    while($data = mysql_fetch_assoc($result))
    {   
        
             $order_basket = mysql_query("SELECT system_countries.country_name, system_services.service_name, system_podservice.podservice_name
    FROM system_services 
    INNER JOIN (system_podservice 
    INNER JOIN (users_customers 
    INNER JOIN (system_countries 
    INNER JOIN order_basket ON system_countries.country_id = order_basket.country_id) ON users_customers.customer_id = order_basket.customer_id) ON system_podservice.podservice_id = order_basket.podservice_id) ON system_services.service_id = order_basket.service_id WHERE (((order_basket.customer_id)=".$data['customer_id']."));");

        echo "<tr>";
        echo    "<td width='40'>".$data['customer_id']."</td>";
        echo    "<td width='60'>".$data['quest_date']."</td>";
        echo    "<td width='100'>".$data['quest_status']."</td>";
        echo    "<td width='200'>".$data['customer_surn']." ".$data['customer_name']." ".$data['customer_midd']."</td>";
        echo    "<td width='180'>".$data['customer_email']."</td>";
        echo    "<td width='140'>".$data['customer_primaryphone']."</td>";
        echo    "<td width='200'>".$data['customer_compname']."</td>";
        echo    "<td width='200'>".$data['customer_country']."</td>";
        echo    "<td width='120'>".$data['customer_city']."</td>";
        echo    "<td width='400'>";
        while ($basket_data = mysql_fetch_assoc($order_basket)) {
            echo $basket_data['country_name']." - ".$basket_data['service_name']." - ".$basket_data['podservice_name']."<br>"; 
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    $result = mysql_query("SELECT * FROM users_customers WHERE quest_status != 'черновик'");

    echo "
    <table width='2000' border='1' cellpadding='0' cellspacing='0' align='center'>
        <tr>
            <td width='40'><b>№</b></td>
            <td width='60'><b>Дата</b></td>
            <td width='100'><b>Статус</b></td>
            <td width='300'><b>ФИО</b></td>
            <td width='180'><b>Email</b></td>
            <td width='140'><b>Телефон</b></td>
            <td width='200'><b>Наименование компании</b></td>
            <td width='160'><b>Страна обращения</b></td>
            <td width='160'><b>Город обращения</b></td>
            <td width='400'><b>Заказ клиента</b></td>
        </tr>";


    while($data = mysql_fetch_assoc($result))
    {   
        
        $order_basket = mysql_query("SELECT system_countries.country_name, system_services.service_name, system_podservice.podservice_name
    FROM system_services 
    INNER JOIN (system_podservice 
    INNER JOIN (users_customers 
    INNER JOIN (system_countries 
    INNER JOIN order_basket ON system_countries.country_id = order_basket.country_id) ON users_customers.customer_id = order_basket.customer_id) ON system_podservice.podservice_id = order_basket.podservice_id) ON system_services.service_id = order_basket.service_id WHERE (((order_basket.customer_id)=".$data['customer_id']."));");

        
        echo "<tr>";
        echo    "<td width='40'>".$data['customer_id']."</td>";
        echo    "<td width='60'>".$data['quest_date']."</td>";
        echo    "<td width='100'>".$data['quest_status']."</td>";
        echo    "<td width='200'>".$data['customer_surn']." ".$data['customer_name']." ".$data['customer_midd']."</td>";
        echo    "<td width='180'>".$data['customer_email']."</td>";
        echo    "<td width='140'>".$data['customer_primaryphone']."</td>";
        echo    "<td width='200'>".$data['customer_compname']."</td>";
        echo    "<td width='160'>".$data['customer_country']."</td>";
        echo    "<td width='160'>".$data['customer_city']."</td>";
        echo    "<td width='400'>";
        while ($basket_data = mysql_fetch_assoc($order_basket)) {
            echo $basket_data['country_name']." - ".$basket_data['service_name']." - ".$basket_data['podservice_name']."<br>"; 
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>