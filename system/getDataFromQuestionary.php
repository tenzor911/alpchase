
<?php

include('../setup/mysql_settings.php');

$date_today = date("d.m.y");
$cust_name = $_REQUEST['cust_name'];
$cust_surname = $_REQUEST['cust_surname'];
$cust_companyname = $_REQUEST['cust_companyname'];
$cust_position = $_REQUEST['cust_position'];
$cust_email = $_REQUEST['cust_email'];
$cust_pass = $_REQUEST['cust_pass'];
$cust_primphone = $_REQUEST['cust_primphone'];
$cust_addphone = $_REQUEST['cust_addphone'];
$cust_country = $_REQUEST['cust_country'];
$cust_city = $_REQUEST['cust_city'];
$cust_trustee = $_REQUEST['cust_trustee'];
$cust_knowabout = $_POST['cust_knowabout'];
$cust_questions = $_REQUEST['cust_questions'];
$cust_answers = $_REQUEST['cust_answers'];
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

mysql_query("INSERT INTO users_customers "
        . "(quest_date, "
        . "customer_name, "
        . "customer_surn, "
        . "customer_compname, "
        . "customer_position, "
        . "customer_email, "
        . "customer_pass, "
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
        . "'$cust_name', "
        . "'$cust_surname', "
        . "'$cust_companyname', "
        . "'$cust_position', "
        . "'$cust_email', "
        . "MD5('$cust_pass'), "
        . "'$cust_primphone', "
        . "'$cust_addphone', "
        . "'$cust_country', "
        . "'$cust_city', "
        . "'$cust_trustee', "
        . "'$cust_knowabout', "
        . "'$cust_questions', "
        . "'$cust_answers',"
        . "'извещён')");//Услуги

$customer_id = $_REQUEST['cust_id'];
$countries_arr = $_POST['countries'];
$services_arr = $_POST['services'];
$podservices_arr = $_POST['podservices'];

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
echo "Анкета была сохранена!";
header('Refresh: 3; URL=../templates/questionary');
?>