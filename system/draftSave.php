<?php
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$dataFromDraftEdit = urldecode($_POST['myData']);

parse_str($dataFromDraftEdit);

$c_id       = $edit_id;

$c_name     = $edit_name;
$c_surn     = $edit_surn;
$c_email    = $edit_email;
$c_prim     = $edit_primphone;
$c_addt     = $edit_addphone;
$c_comp     = $edit_compname;
$c_cntr     = $edit_country;
$c_city     = $edit_city;

mysql_query("UPDATE users_customers SET "
        . "customer_name='$c_name', "
        . "customer_surn='$c_surn', "
        . "customer_email='$c_email', "
        . "customer_primaryphone='$c_prim', "
        . "customer_additphone='$c_addt', "
        . "customer_compname='$c_comp', "
        . "customer_country='$c_cntr', "
        . "customer_city='$c_city' WHERE customer_id='$c_id'");

/*
foreach( $countries as $country_key => $value ) {	
    $country_id = intval( $countries[$country_key] );
    if( $country_id > 0 ) 
    {			
    foreach( $services as $key => $value ) {				
        if( isset( $services[$country_key][$key] ) ) $service_id = intval( $services[$country_key][$key] ); 
        else $service_id = 0;			
        if( isset( $services[$country_key][$key] ) ) $podservice_id = intval( $podservices[$country_key][$key] ); 
        else $podservice_id = 0;			
        if( $service_id > 0 ) 
            {	
                mysql_query( "INSERT INTO `order_basket` (`customer_id`, `country_id`, `service_id`, `podservice_id`) VALUES ('{$customer_id}', '{$country_id}', '{$service_id}', '{$podservice_id}')" 
            );				
            echo "INSERT INTO `order_basket` (`customer_id`, `country_id`, `service_id`, `podservice_id`) VALUES ('{$customer_id}', '{$country_id}', '{$service_id}', '{$podservice_id}')";			

        }		
    }	
}
}*/
?>