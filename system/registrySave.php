<?php
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$dataFromRegistryEdit = urldecode($_POST['myData']);

parse_str($dataFromRegistryEdit);

$customer_id = $edit_id;

echo $c_id = $edit_id;
echo $c_date = $edit_date;
echo $c_name = $edit_name;
echo $c_surname = $edit_surn;
echo $c_email = $edit_email;
echo $c_primphone = $edit_primphone;
echo $c_addphone = $edit_addphone;
echo $c_company = $edit_compname;
echo $c_country = $edit_country;
echo $c_city = $edit_city;

foreach ($countries as $country_key => $value){
    $country_id = intval($countries[$country_key]);
    if( $country_id > 0 ) {	
        foreach( $services as $key => $value ) {
             if( isset( $services[$country_key][$key] ) ) $service_id = intval( $services[$country_key][$key] ); 
             else
                 $service_id = 0;
             if( isset( $services[$country_key][$key] ) ) $podservice_id = intval( $podservices[$country_key][$key] );
             else 
                $podservice_id = 0;
             if( $service_id > 0 ) {	
                mysql_query( "INSERT INTO `order_basket` (`customer_id`, `country_id`, `service_id`, `podservice_id`) VALUES ('{$customer_id}', '{$country_id}', '{$service_id}', '{$podservice_id}')" );				
                echo mysql_query( "INSERT INTO `order_basket` (`customer_id`, `country_id`, `service_id`, `podservice_id`) VALUES ('{$customer_id}', '{$country_id}', '{$service_id}', '{$podservice_id}')" );				
                		
            }	
        }
    } 
}

?>