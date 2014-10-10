<?php
include ('../../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

class loadPackets {
    function loadTableWithPackets() 
    {
        $selectAllPackets = mysql_query("SELECT * FROM system_packets");
        while ($getAllPackets = mysql_fetch_array($selectAllPackets))
        {
            if ($getAllPackets['packet_id'] == 0)
            {
                echo "<tr><td><center>".$getAllPackets['packet_id']."</center></td><td><center>".$getAllPackets['packet_name']."</center></td></tr>";    
            }
            else 
            {
                echo "<tr><td><center>".$getAllPackets['packet_id']."</center></td><td><center>".$getAllPackets['packet_name']."</center></td><td><center><input type='checkbox' id='packetState".$getAllPackets['packet_id']."' onclick='loadCommonPriceWindow(".$getAllPackets['packet_id'].")'><input type='hidden' id='packetIdValue".$getAllPackets['packet_id']."' name='packetNameValue[]' value='' disabled></center></td></tr>";    
            }
        }
    }    
}
?>
