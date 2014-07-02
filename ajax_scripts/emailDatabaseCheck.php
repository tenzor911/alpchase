<?php
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$requestedEmail = $_REQUEST['name_d'];

$sql_get_emails = mysql_query("SELECT * FROM users_customers WHERE customer_email = '$requestedEmail'");

if(mysql_num_rows($sql_get_emails) == 0) {
     echo "<font color='green'>Данный адрес свободен для регистрации.</font>";
} else {
     echo "Внимание! Пользователь с данным адресом уже существует в базе данных!";
}
?>