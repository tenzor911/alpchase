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

echo "Черновик сохранён!";
header('Refresh: 1; URL=../templates/drafts');

?>