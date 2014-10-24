<?php
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$dataForEdit = urldecode($_POST['myData']);

parse_str($dataForEdit);

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
//echo "DELETE FROM `order_basket` WHERE `customer_id`='".$c_id."'";
foreach ($basket as $item)
{
mysql_query( "INSERT INTO `order_basket` (`customer_id`, `country_id`, `service_id`, `podservice_id`)"
        . " VALUES ('{$c_id}', '{$item->country}', '{$item->svc}', '{$item->subsvc}')" );				
}
?>