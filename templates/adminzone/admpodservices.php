<?php 

include('../../setup/mysql_settings.php');

session_start();

    mysql_query("SET NAMES 'utf8'");
    mysql_query("SET CHARACTER SET 'utf8'");

if($_SESSION['uname']!='admin'){
    header("location: ../index");
}

echo "Добро пожаловать! Вы зашли, как: ".$_SESSION['uname']."!";

?>

<html lang="en-gb" dir="ltr">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Административная панель - Редактирование подуслуг</title>
	<link rel="shortcut icon" href="docs/images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="docs/images/apple-touch-icon.png">
        <link rel="stylesheet" href="../css/uikit.css">
        <script src="../../js/jquery/jquery-1.10.2.js"></script>
        <script src="../../js/functions/function_AdminOperations.js"></script>
    </head>
    <body class="tm-background">
        <center><input value="Вернуться назад" onclick="location.href='../adminpanel'" type="button" style="width: 150px"> <input value="Пользователи" onclick="location.href='admusers.php'" type="button" style="width: 150px"> <input value="Роли" onclick="location.href='admroles.php'" type="button" style="width: 150px"> <input value="Услуги" onclick="location.href='admservices.php'" type="button" style="width: 150px"> <input value="Пакеты" onclick="location.href='admpackets.php'" type="button" style="width: 150px"> <input value="Соотношения" onclick="location.href='admrelations.php'" type="button" style="width: 150px"> <input value="Соотношение пакетных услуг" onclick="location.href='admpacketsrelation.php'" type="button" style="width: 200px"></center>
        <hr>
        <center><h2>Редактировать список подуслуг</h2></center>
        <hr>
    </body>
</html>   

<?php

include ('../../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

echo    "<table border='1' cellspacing='0' cellpadding='0' align='center'>";
echo        "<tr>";
echo            "<td width='200'>";
echo                "<input type='text' id='newPodservice' size='74' placeholder='укажите название подуслуги'>";
echo            "</td>";
echo            "<td width='100'>";
echo                "<input type='button' id='addpodservice' value='добавить подуслугу' size='62'>";
echo            "</td>";
echo        "</tr>";
echo    "</table>";

echo    "<br>";
echo    "<hr>";
echo    "<br>";

    
$currentPodservices = mysql_query("SELECT * FROM system_podservice ORDER BY podservice_id ASC");

echo "<table border='1' cellspacing='0' cellpadding='0' align='center'>";
echo    "<tr><td width='50'><center>№</center></td><td width='100'><center>Название подуслуги</center></td><td width='150' colspan='2'><center>Опции</center></td></tr>";
$row_counter = -1;
while ($getPodserviceFields = mysql_fetch_array($currentPodservices))
{
    $row_counter++;
    echo "<tr>";
    echo    "<td width='50'><center>".$getPodserviceFields['podservice_id']."</center></td>";
    echo    "<td width='200'><input type='text' id='podservice".$row_counter."' value='".$getPodserviceFields['podservice_name']."' size='46' disabled></td>";
    echo "<td width='50'>";
        if ($getPodserviceFields['podservice_id'] > 0 )
        {
            echo "<center><input type='button' id='editPodserviceData".$row_counter."' value='редактировать'></center></td>";
        } else 
        {
            echo "";
        }
    echo "</td>";
    echo "<td width='50'>";
        if ($getPodserviceFields['podservice_id'] > 0 )
        {
            echo "<center><input type='button' id='savePodserviceData".$row_counter."' value='сохранить' disabled></center></td>";
        } else 
        {
            echo "";
        }
    echo "</td>";
    /*
    echo "<td width='50'>";
        if ($getServiceFields['service_id'] > 0 )
        {
            echo "<center><input type='button' id='deleteServiceData".$row_counter."' value='удалить'></center></td>";
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