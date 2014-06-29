<?php

include('../setup/mysql_settings.php');

$delete_id = $_REQUEST['delete'];

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

mysql_query("DELETE FROM users_customers WHERE customer_id = '$delete_id'");

header('Refresh: 0; URL=../templates/registry');

?>