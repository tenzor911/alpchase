<?php
include('../setup/mysql_settings.php');
class QuestNumber{
    private $result;
	private $array_my;
    
    public function countQuestCustomer() 
	{
        $this->result = mysql_query("SELECT `AUTO_INCREMENT` FROM  INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'alpchase' AND TABLE_NAME = 'users_customers'");
		$this->array_my = mysql_fetch_row($this->result);
		$rat = $this->array_my[0];
        echo $rat;
    }    
}
?>

