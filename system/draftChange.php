<?php

include('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$ID = $_REQUEST['change'];

mysql_query("UPDATE users_customers SET quest_status='извещён' WHERE customer_id='$ID'");

header('Refresh: 3; URL=../templates/drafts');

?>