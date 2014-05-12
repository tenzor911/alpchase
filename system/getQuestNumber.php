<?php

include('../setup/mysql_settings.php');

class QuestNumber{
    
    private $result;
    private $num_rows;
    
    public function countQuestCustomer() {
        $this->result = mysql_query("SELECT * FROM users_customers");
        $this->num_rows = mysql_num_rows($this->result) + 1;   
        echo $this->num_rows;
    }    
}
?>

