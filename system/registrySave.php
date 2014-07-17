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
echo $c_surn = $edit_surn;
echo $c_email = $edit_email;
echo $c_prim = $edit_primphone;
echo $c_addt = $edit_addphone;
echo $c_comp = $edit_compname;
echo $c_cntr = $edit_country;
echo $c_city = $edit_city;

mysql_query("UPDATE users_customers SET "
        . "customer_name='$c_name', "
        . "customer_surn='$c_surn', "
        . "customer_email='$c_email', "
        . "customer_primaryphone='$c_prim', "
        . "customer_additphone='$c_addt', "
        . "customer_compname='$c_comp', "
        . "customer_country='$c_cntr', "
        . "customer_city='$c_city' WHERE customer_id='$c_id'");
?>