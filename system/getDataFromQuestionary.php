<?php

include('../setup/mysql_settings.php');
$date_today = date("m.d.y");
$cust_name = $_REQUEST['cust_name'];
$cust_surname = $_REQUEST['cust_surname'];
$cust_middle = $_REQUEST['cust_middle'];
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

mysql_query("INSERT INTO users_customers (quest_date, customer_name, customer_surn, customer_midd) VALUES ('$date_today','$cust_name', '$cust_surname', '$cust_middle')");

echo $date_today;
echo "<p>";
echo $cust_name;
echo "<p>";
echo $cust_surname;
echo "<p>";
echo $cust_middle;
echo "<p>";
echo $cust_companyname;
echo "<p>";
echo $cust_position;
echo "<p>";
echo $cust_email;
echo "<p>";
echo $cust_pass;
echo "<p>";
echo $cust_primphone;
echo "<p>";
echo $cust_addphone;
echo "<p>";
echo $cust_country;
echo "<p>";
echo $cust_city;
echo "<p>";
echo $cust_trustee;
echo "<p>";
echo $cust_knowabout;
echo "<p>";
echo $cust_questions;
echo "<p>";
echo $cust_answers;
?>