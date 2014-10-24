<?php

include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$dataForEdit = urldecode($_POST['myData']);
$getCurrentTime = time();
parse_str($dataForEdit);



$c_id = $cust_id;

$basket=array();

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
        $buf = new cService();
        $buf ->country= $value;
        $buf ->svc= $services[$country_key];
        $buf ->subsvc= $podservices[$country_key];
        $basket[]=$buf;
}
mysql_query( "DELETE FROM `order_basket` WHERE `customer_id`='".$c_id."'");

foreach ($basket as $item)
{
mysql_query( "INSERT INTO `order_basket` (`customer_id`, `country_id`, `service_id`, `podservice_id`)"
        . " VALUES ('{$c_id}', '{$item->country}', '{$item->svc}', '{$item->subsvc}')" );				
}

mysql_query( "UPDATE `users_customers` SET `quest_date`='{$getCurrentTime}' WHERE `customer_id`='".$c_id."'" );

?>

