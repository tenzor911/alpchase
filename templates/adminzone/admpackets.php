<html lang="en-gb" dir="ltr">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Административная панель - Редактирование пакетов</title>
	<link rel="shortcut icon" href="docs/images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="docs/images/apple-touch-icon.png">
        <link rel="stylesheet" href="../css/uikit.css">
        <script src="../../js/jquery/jquery-1.10.2.js"></script>
        <script src="../../js/functions/function_AdminOperations.js"></script>
    </head>
    <body class="tm-background">
        <input value="Вернуться назад" onclick="location.href='../adminpanel'" type="button" style="width: 300px">
        <center><h2>Редактировать список пакетов</h2></center>
        <hr>
    </body>
</html>   

<?php

include ('../../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

echo    "<table border='1' cellspacing='0' cellpadding='0' align='center'>";
echo        "<tr>";
echo            "<td width='300'>";
echo                "<input type='text' id='newPacket' size='74' placeholder='укажите название пакета'>";
echo            "</td>";
echo            "<td width='450'>";
echo                "укажите секцию, в которую будет входить пакет: <select id='packetCat'><option value='econom'>econom</option><option value='standart'>standart</option><option value='vip'>vip</option></select>";
echo            "</td>";
echo            "<td width='100'>";
echo                "<input type='button' id='addpacket' value='добавить пакет' size='62'>";
echo            "</td>";
echo        "</tr>";
echo    "</table>";

echo    "<br>";
echo    "<hr>";
echo    "<br>";

    
$currentPackets = mysql_query("SELECT * FROM system_packets ORDER BY packet_id ASC");

echo "<table border='1' cellspacing='0' cellpadding='0' align='center'>";
echo    "<tr><td width='50'><center>№</center></td><td width='300'><center>Название пакета</center></td><td width='200'><center>Секция пакета</center></td><td width='150' colspan='2'><center>Опции</center></td></tr>";
$row_counter = -1;
while ($getPacketFields = mysql_fetch_array($currentPackets))
{
    $row_counter++;
    echo "<tr>";
    echo    "<td width='50'><center>".$getPacketFields['packet_id']."</center></td>";
    echo    "<td width='200'><input type='text' id='packet".$row_counter."' value='".$getPacketFields['packet_name']."' size='46' disabled></td>";
    echo    "<td width='200'><select id='packetcategory".$row_counter."' disabled><option selected value='".$getPacketFields['packet_type']."'>".$getPacketFields['packet_type']." (default)</option><option value='econom'>econom</option><option value='standart'>standart</option><option value='vip'>vip</option></select>";
    echo "<td width='50'>";
        if ($getPacketFields['packet_id'] > 0 )
        {
            echo "<center><input type='button' id='editPacketData".$row_counter."' value='редактировать'></center></td>";
        } else 
        {
            echo "";
        }
    echo "</td>";
    echo "<td width='50'>";
        if ($getPacketFields['packet_id'] > 0 )
        {
            echo "<center><input type='button' id='savePacketData".$row_counter."' value='сохранить' disabled></center></td>";
        } else 
        {
            echo "";
        }
    echo "</td>";
    /*
    echo "<td width='50'>";
        if ($getPacketFields['packet_id'] > 0 )
        {
            echo "<center><input type='button' id='deletePacketData".$row_counter."' value='удалить'></center></td>";
        } else 
        {
            echo "";
        }
    echo "</td>";
     */
    echo "</tr>";
}
echo "</table>";
?>