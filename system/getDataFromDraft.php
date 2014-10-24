<?php

include('../setup/mysql_settings.php');

$dataFromQuestionary = urldecode($_POST['myData']);

parse_str($dataFromQuestionary);

$customer_id = $cust_id;
$date_today = date("d.m.y");
$c_name = $cust_name;
$c_surname = $cust_surname;
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

//We need to form a good data structure before load it into DB

$basket=array();
//one outer loop for countries and one  inner loops for services and subservices
//We Assume that services and subservices array is the same length/////FIXME - check it

if(count($services)!=count($podservices))
{
    echo "An error occured";
    return;
}

class cService {
    public $country;
    public $svc;
    public $subsvc;
}

foreach ($countries as $country_key => $value)
{     

     foreach ( $services[$country_key] as $j => $svc) //inner loop services
     {
        $buf = new cService();
        $buf ->country= $value;
        $buf ->svc= $svc;
        $buf ->subsvc= $podservices[$country_key][$j];
        $basket[]=$buf;
     } 

}
//put data to DB

//print_r($basket);

$getRowsForCurrentCustomer = mysql_query("SELECT * FROM users_customers WHERE customer_id=".$customer_id."");

if (mysql_num_rows($getRowsForCurrentCustomer) > 0) 
{
    mysql_query("UPDATE users_customers SET "
        . "customer_name='$c_name', "
        . "customer_surn='$c_surname', "
        . "customer_email='$c_email', "
        . "customer_primaryphone='$c_primphone', "
        . "customer_additphone='$c_addphone', "
        . "customer_compname='$c_companyname', "
        . "customer_country='$c_country', "
        . "customer_position='$c_position',"
        . "customer_city='$c_city', "
        . "customer_duty='$c_trustee', "
        . "customer_knowabout='$c_knowabout', "
        . "customer_questions='$c_questions', "
        . "customer_answers='$c_answers'  "
        . "WHERE customer_id='$customer_id'");   
}
else
{
    mysql_query("INSERT INTO users_customers "
        . "(quest_date, "
        . "customer_name, "
        . "customer_surn, "
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
}

$getRowsForCurrentBasket = mysql_query("SELECT * FROM order_basket WHERE customer_id=".$customer_id."");

if (mysql_num_rows($getRowsForCurrentBasket) > 0)
{
    foreach ($basket as $item)
    {
        mysql_query( "UPDATE order_basket SET country_id='{$item->country}', service_id='{$item->svc}', podservice_id='{$item->subsvc}') VALUES ('{$item->country}', '{$item->svc}', '{$item->subsvc}') WHERE customer_id=".$customer_id."" );				
    }
}
else
{
    foreach ($basket as $item)
    {
        mysql_query( "INSERT INTO `order_basket` (customer_id, country_id, service_id, podservice_id) VALUES ({$customer_id}, {$item->country}, {$item->svc}, {$item->subsvc})");				
    }
}
?>
