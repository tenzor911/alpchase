<?php
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$edit_id = $_REQUEST['edit_id'];
$date = $_REQUEST['edit_date'];
$c_name = $_REQUEST['edit_name'];
$c_surn = $_REQUEST['edit_surn'];
$c_midd = $_REQUEST['edit_midd'];
$c_email = $_REQUEST['edit_email'];
$c_prim = $_REQUEST['edit_primphone'];
$c_addt = $_REQUEST['edit_addphone'];
$c_comp = $_REQUEST['edit_compname'];
$c_cntr = $_REQUEST['edit_country'];
$c_city = $_REQUEST['edit_city'];


mysql_query("UPDATE users_customers SET "
        . "quest_date='$date', "
        . "customer_name='$c_name', "
        . "customer_surn='$c_surn', "
        . "customer_midd='$c_midd', "
        . "customer_email='$c_email', "
        . "customer_primaryphone='$c_prim', "
        . "customer_additphone='$c_addt', "
        . "customer_compname='$c_comp', "
        . "customer_country='$c_cntr', "
        . "customer_city='$c_city' WHERE customer_id='$edit_id'");

echo "Запись сохранена!";

$customer_id = $_REQUEST['edit_id'];
$countries_arr = $_POST['countries'];
$services_arr = $_POST['services'];
$podservices_arr = $_POST['podservices'];

var_dump($countries_arr);
var_dump($services_arr);
var_dump($podservices_arr);

foreach( $countries_arr as $country_key => $value ) {	
    $country_id = intval( $countries_arr[$country_key] );	
    if( $country_id > 0 ) {			
        foreach( $services_arr as $key => $value ) {				
            if( isset( $services_arr[$country_key][$key] ) ) $service_id = intval( $services_arr[$country_key][$key] ); 
            else 
                $service_id = 0;			
            if( isset( $services_arr[$country_key][$key] ) ) $podservice_id = intval( $podservices_arr[$country_key][$key] ); 
            else 
                $podservice_id = 0;			
            if( $service_id > 0 ) {	
                mysql_query( "INSERT INTO `order_basket` (`customer_id`, `country_id`, `service_id`, `podservice_id`) VALUES ('{$customer_id}', '{$country_id}', '{$service_id}', '{$podservice_id}')" );				
                echo "INSERT INTO `order_basket` (`customer_id`, `country_id`, `service_id`, `podservice_id`) VALUES ('{$customer_id}', '{$country_id}', '{$service_id}', '{$podservice_id}')<br>";			
            }		
        }	
    }
}

//header('Refresh: 0; URL=../templates/registry');

?>