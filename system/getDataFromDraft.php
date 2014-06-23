
<?php

include('../setup/mysql_settings.php');

$date_today = date("d.m.y");
$cust_name = $_REQUEST['c_name'];
$cust_surname = $_REQUEST['c_surn'];
$cust_middle = $_REQUEST['c_midd'];
$cust_companyname = $_REQUEST['c_comp'];
$cust_position = $_REQUEST['c_psit'];
$cust_email = $_REQUEST['c_mail'];
$cust_primphone = $_REQUEST['c_prim'];
$cust_addphone = $_REQUEST['c_addt'];
$cust_country = $_REQUEST['c_cntr'];
$cust_city = $_REQUEST['c_city'];
$cust_trustee = $_REQUEST['c_trst'];
$cust_knowabout = $_REQUEST['c_knab'];
$cust_questions = $_REQUEST['c_ques'];
$cust_answers = $_REQUEST['c_answ'];

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
        . "'$cust_name', "
        . "'$cust_surname', "
        . "'$cust_middle', "
        . "'$cust_companyname', "
        . "'$cust_position', "
        . "'$cust_email', "
        . "'$cust_primphone', "
        . "'$cust_addphone', "
        . "'$cust_country', "
        . "'$cust_city', "
        . "'$cust_trustee', "
        . "'$cust_knowabout', "
        . "'$cust_questions', "
        . "'$cust_answers',"
        . "'черновик')");//Услуги
echo "Success!";

header('Refresh: 3; URL=../templates/questionary');
?>