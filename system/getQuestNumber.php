<?php

include('../setup/mysql_settings.php');

class QuestNumber{
    
    
    
}

$result = mysql_query("SELECT * FROM users_customers");
$num_rows = mysql_num_rows($result) + 1;

echo "Получено $num_rows рядов\n";

?>

