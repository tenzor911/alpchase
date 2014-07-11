
<?php

include('../setup/mysql_settings.php');

$dataFromQuestionary = urldecode($_POST['myData']);

parse_str($dataFromQuestionary);

$customer_id = $cust_id;

$date_today = date("d.m.y");

$c_name = $cust_name;
$c_surname = $cust_surname;
$c_middle = $cust_middle;
$c_companyname = $cust_companyname;
$c_position = $cust_position;
$c_email = $cust_email;
$c_primphone = $cust_primphone;
$c_addphone = $cust_addphone;
$c_country = $cust_country;
$c_city = $cust_city;
$c_trustee = $cust_trustee;
$c_knowabout = $cust_knowabout;
$c_questions = $cust_questions;
$c_answers = $cust_answers;

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

mysql_query("INSERT INTO users_customers "
        . "(quest_date, "
        . "customer_name, "
        . "customer_surn, "
        . "customer_midd, "
        . "customer_compname, "
        . "customer_position, "
        . "customer_email, "
        . "customer_primaryphone, "
        . "customer_additphone, "
        . "customer_country, "
        . "customer_city, "
        . "customer_duty, "
        . "customer_knowabout, "
        . "customer_questions, "
        . "customer_answers,"
        . "quest_status) "
        . "VALUES "
        . "('$date_today', "
        . "'$c_name', "
        . "'$c_surname', "
        . "'$c_middle', "
        . "'$c_companyname', "
        . "'$c_position', "
        . "'$c_email', "
        . "'$c_primphone', "
        . "'$c_addphone', "
        . "'$c_country', "
        . "'$c_city', "
        . "'$c_trustee', "
        . "'$c_knowabout', "
        . "'$c_questions', "
        . "'$c_answers',"
        . "'черновик')");//Услуги

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
                echo $customer_id." ".$country_id." ".$service_id." ".$podservice_id;			
            }	
        }
    } 
}
//header('Refresh: 3; URL=../templates/questionary');
?>