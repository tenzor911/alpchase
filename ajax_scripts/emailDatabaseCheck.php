<?php
include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$requestedEmail = $_REQUEST['email_select'];

$sql_get_emails = mysql_query("SELECT * FROM users_customers WHERE customer_email = '$requestedEmail'");

if(mysql_num_rows($sql_get_emails) == 0) {
     echo "Данный адрес не зарегистрирован в базе данных.";
} else {
     echo "Внимание! Пользователь с данным адресом уже существует в базе данных!";
     echo "<br>";
     echo "Количество найденых записей: " .mysql_num_rows($sql_get_emails);
}
?>