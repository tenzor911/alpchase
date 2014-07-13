<?php
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

/*
$dataFromQuestionary = urldecode($_POST['myData']);

parse_str($dataFromQuestionary);

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

mysql_query("UPDATE users_customers SET customer_name='$c_name', customer_surn='$c_surname', customer_email='$c_email', customer_primaryphone='$c_primphone', customer_additphone='$c_addphone', customer_compname='$c_company', customer_country='$c_country', customer_city='$c_city' WHERE customer_id='$c_id'");//Услуги
*/

$customer_id = $_REQUEST['edit_id'];
$countries_arr = $_REQUEST['countries'];
$services_arr = $_REQUEST['services'];
$podservices_arr = $_REQUEST['podservices'];

mysql_query( "INSERT INTO `order_basket` (`customer_id`, `country_id`, `service_id`, `podservice_id`) VALUES ('$customer_id', 2, 2, 2)" );	

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
                //mysql_query( "INSERT INTO `order_basket` (`customer_id`, `country_id`, `service_id`, `podservice_id`) VALUES ('{$customer_id}', '{$country_id}', '{$service_id}', '{$podservice_id}')" );				
                echo "'{$customer_id}'";			
            }		
        }	
    }
}


?>