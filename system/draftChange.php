<?php
include('../setup/mysql_settings.php');
include('../classes/email/class.sendEmail.php');
include('../classes/system/class.passwordGen.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$ID = $_REQUEST['change'];

$emailInformer = new sendEmail();
$passMaker = new passwordGen();
$newPassword = $passMaker->randomPassword();

mysql_query("UPDATE users_customers SET customer_pass=MD5('$newPassword'), quest_status='извещён' WHERE customer_id='$ID'");

$customerData = mysql_fetch_array(mysql_query("SELECT customer_name, customer_email FROM users_customers WHERE customer_id='$ID'"));

$emailInformer->getLoginPass($customerData['customer_email'], $newPassword, $customerData['customer_name']);
$emailInformer->emailMethod();

header('Refresh: 0; URL=../templates/drafts');

?>