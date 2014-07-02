<?php

class dataEdit 
{   
    function loadDataForEdit($dataId)
    {  
        if ($request_info=mysql_query("SELECT * FROM users_customers where customer_id ='$dataId'"))
        {
            $order_basket = mysql_query("SELECT system_countries.country_id, system_services.service_id, system_podservice.podservice_id, system_countries.country_name, system_services.service_name, system_podservice.podservice_name
                FROM system_services 
                INNER JOIN (system_podservice 
                INNER JOIN (users_customers 
                INNER JOIN (system_countries 
                INNER JOIN order_basket ON system_countries.country_id = order_basket.country_id) ON users_customers.customer_id = order_basket.customer_id) ON system_podservice.podservice_id = order_basket.podservice_id) ON system_services.service_id = order_basket.service_id WHERE (((order_basket.customer_id)=".$dataId."));");
            $returned_info = mysql_fetch_array($request_info);
            echo "    <tr>
                        <td><b>№</b></td>
                        <td width='400' colspan='3'><input type=text name=edit_id size='1' readonly=readonly value=".$returned_info['customer_id']."></td>
                      </tr>       
                        <td><b>Дата</b></td>
                        <td width='400' colspan='3'><input type=text name=edit_date size='25' readonly=readonly value=".$returned_info['quest_date']."></td>
                      <tr>     
                        <td><b>Фамилия</b></td>
                        <td width='400' colspan='3'><input type=text name=edit_surn placeholder='введите фамилию' size='25' value=".$returned_info['customer_surn']."></td>
                      </tr>
                      <tr>     
                        <td><b>Имя</b></td>
                        <td width='400' colspan='3'><input type=text name=edit_name placeholder='введите имя' size='25' value=".$returned_info['customer_name']."></td>
                      </tr>
                      <tr>     
                        <td><b>Отчество</b></td>
                        <td width='400' colspan='3'><input type=text name=edit_midd placeholder='введите отчество' size='25' value=".$returned_info['customer_midd']."></td>
                      </tr>
                      <tr>
                        <td><b>Email</b></td>
                        <td width='400' colspan='3'><input type=text name=edit_email placeholder='введите email' size='25' value=".$returned_info['customer_email']."></td>
                      </tr>
                      <tr>
                        <td><b>Основной телефон</b></td>
                        <td width='400' colspan='3'><input type=text name=edit_primphone placeholder='введите телефон' onkeypress='return isNumber(event)' size='25' value=".$returned_info['customer_primaryphone']."></td>
                      </tr> 
                      <tr>
                        <td><b>Дополнительный телефон</b></td>
                        <td width='400' colspan='3'><input type=text name=edit_addphone placeholder='введите телефон' onkeypress='return isNumber(event)' size='25' value=".$returned_info['customer_additphone']."></td>
                      </tr>
                      <tr>
                        <td><b>Наименование компании</b></td>
                        <td width='400' colspan='3'><input type=text name=edit_compname placeholder='введите имя компании' size='25' value=".$returned_info['customer_compname']."></td>
                      </tr>
                      <tr>
                        <td><b>Страна обращения</b></td>
                        <td width='400' colspan='3'><input type=text name=edit_country placeholder='введите страну' size='25' value=".$returned_info['customer_country']."></td>
                      <tr>
                        <td><b>Город обращения</b></td>
                        <td width='400' colspan='3'><input type=text name=edit_city placeholder='введите город' size='25' value=".$returned_info['customer_city']."></td>
                      </tr>";
                      
        } 
    }
    
    function loadCustomerBasket($dataId)
    {
        if ($request_info=mysql_query("SELECT * FROM users_customers where customer_id ='$dataId'"))
        {
            $order_basket = mysql_query("SELECT system_countries.country_id, system_services.service_id, system_podservice.podservice_id, system_countries.country_name, system_services.service_name, system_podservice.podservice_name
                FROM system_services 
                INNER JOIN (system_podservice 
                INNER JOIN (users_customers 
                INNER JOIN (system_countries 
                INNER JOIN order_basket ON system_countries.country_id = order_basket.country_id) ON users_customers.customer_id = order_basket.customer_id) ON system_podservice.podservice_id = order_basket.podservice_id) ON system_services.service_id = order_basket.service_id WHERE (((order_basket.customer_id)=".$dataId."));");
            $returned_info = mysql_fetch_array($request_info);
            echo "<script type='text/javascript' src='../js/functions/test.js'></script>";
            echo "<script type='text/javascript' src='../js/jquery/jquery-1.10.2.js'></script>";
            
            $row_counter = 0;
            
  
                        
                      echo "<div id='ServiceBlockGroup'></div>";
                      while ($basket_data = mysql_fetch_assoc($order_basket)) 
                      {
                            $row_counter++;
                            echo "<script>test(".$row_counter.", ".$basket_data['country_id'].", ".json_encode($basket_data['country_name']).");</script>";
                            echo "<tr>";
                            echo    "<td><center><select name='countries[".$row_counter."]' id='select_country_id".$row_counter."' onchange='selectCountryAll(".$row_counter.",this.value);'></select></center></td>";
                            echo    "<td><center><select name='services[".$row_counter."]' id='select_service_id".$row_counter."' class='select_service".$row_counter."' onchange='selectService(".$row_counter.",this.value);'><option value=".$basket_data['service_id']." selected>".$basket_data['service_name']."</option></select></center></td>";
                            echo    "<td><center><select name='podservices[".$row_counter."]' id='select_podservice_id".$row_counter."' class='select_podservice".$row_counter."'><option value=".$basket_data['podservice_id']." selected>".$basket_data['service_name']."</option></select></select></center></td>";
                            echo    "<td><center><a href='#'><img src='../icons/bullet_cross.png' id='deleteData' class='.del' alt='удалить' title='удалить' onclick='deleteItem(".$row_counter.")'></a></center></td>";   
                            echo "</tr> ";
                      }  
    }
}
}
?>


      
