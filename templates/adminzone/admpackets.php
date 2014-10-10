<html lang="en-gb" dir="ltr">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Административная панель - Редактирование пакетов</title>
	<link rel="shortcut icon" href="docs/images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="docs/images/apple-touch-icon.png">
        <link rel="stylesheet" href="../css/uikit.css">
        <script src="../../js/jquery/jquery-1.10.2.js"></script>
        <script src="../../js/functions/function_OnlyNumbersField.js"></script>
        <script src="../../js/functions/function_AdminOperations.js"></script>
    </head>
    <body class="tm-background">
        <center><input value="Вернуться назад" onclick="location.href='../adminpanel'" type="button" style="width: 150px"> <input value="Пользователи" onclick="location.href='admusers.php'" type="button" style="width: 150px"> <input value="Роли" onclick="location.href='admroles.php'" type="button" style="width: 150px"> <input value="Услуги" onclick="location.href='admservices.php'" type="button" style="width: 150px"> <input value="Подуслуги" onclick="location.href='admpodservices.php'" type="button" style="width: 150px"> <input value="Соотношения" onclick="location.href='admrelations.php'" type="button" style="width: 150px"> <input value="Соотношение пакетных услуг" onclick="location.href='admpacketsrelation.php'" type="button" style="width: 200px"></center>
        <hr>
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
echo            "<td width='400'>";
echo                "<input type='text' id='newPacket' size='74' placeholder='укажите название пакета'>";
echo            "</td>";
echo            "<td width='700' colspan='4'>";
echo                "цена без категории: <input type='text' id='commonPrice' class='price' size='3' placeholder='0' maxlength='6'> цена за эконом: <input type='text' id='economPrice' class='price' size='3' placeholder='0' maxlength='6'> цена за стандарт: <input type='text' id='standartPrice' class='price' size='3' placeholder='0' maxlength='6'> цена за вип: <input type='text' class='price' id='vipPrice' size='3' placeholder='0' maxlength='6'>";
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
echo    "<tr><td width='50'><center>№</center></td><td width='300'><center>Название пакета</center></td><td width='800' colspan='4'><center>Категории цен пакета</center></td><td width='150' colspan='2'><center>Опции</center></td></tr>";
$row_counter = -1;
while ($getPacketFields = mysql_fetch_array($currentPackets))
{
    $row_counter++;
    echo "<tr>";
    echo    "<td width='50'><center>".$getPacketFields['packet_id']."</center></td>";
    echo    "<td width='200'><input type='text' id='packet".$row_counter."' value='".$getPacketFields['packet_name']."' size='46' disabled></td>";
    echo    "<td width='198'>цена без категории: <input type='text' id='commonPrice".$getPacketFields['packet_id']."' class='price' size='3' value='".$getPacketFields['price_common']."' placeholder='0' maxlength='6' disabled></td><td width='170'>цена за эконом: <input type='text' id='economPrice".$getPacketFields['packet_id']."' class='price' size='3' class='price' value='".$getPacketFields['price_econom']."' placeholder='0' maxlength='6' disabled></td><td width='180'>цена за стандарт: <input type='text' id='standartPrice".$getPacketFields['packet_id']."' size='3' class='price' value='".$getPacketFields['price_standart']."' placeholder='0' maxlength='6' disabled></td><td width='145'>цена за вип: <input type='text' id='vipPrice".$getPacketFields['packet_id']."' class='price' size='3' value='".$getPacketFields['price_vip']."' maxlength='6' placeholder='0' disabled></td>";
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