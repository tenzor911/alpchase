<html lang="en-gb" dir="ltr">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Административная панель - Редактирование стран</title>
	<link rel="shortcut icon" href="docs/images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="docs/images/apple-touch-icon.png">
        <link rel="stylesheet" href="../css/uikit.css">
        <script src="../../js/jquery/jquery-1.10.2.js"></script>
        <script src="../../js/functions/function_AdminOperations.js"></script>
    </head>
    <body class="tm-background">
        <input value="Вернуться назад" onclick="location.href='../adminpanel'" type="button" style="width: 300px">
        <center><h2>Редактировать список стран</h2></center>
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
echo                "<input type='text' id='newCountry' size='74' placeholder='укажите название страны'>";
echo            "</td>";
echo            "<td width='100'>";
echo                "<input type='button' id='addcountry' value='добавить страну' size='62'>";
echo            "</td>";
echo        "</tr>";
echo    "</table>";

echo    "<br>";
echo    "<hr>";
echo    "<br>";

$currentCountries = mysql_query("SELECT * FROM system_countries ORDER BY country_id ASC");

echo "<table border='1' cellspacing='0' cellpadding='0' align='center'>";
echo    "<tr><td width='50'><center>№</center></td><td width='100'><center>Название страны</center></td><td width='150' colspan='2'><center>Опции</center></td></tr>";
$row_counter = -1;
while ($getCountryFields = mysql_fetch_array($currentCountries))
{
    $row_counter++;
    echo "<tr>";
    echo    "<td width='50'><center>".$getCountryFields['country_id']."</center></td>";
    echo    "<td width='200'><input type='text' id='country".$row_counter."' value='".$getCountryFields['country_name']."' size='46' disabled></td>";
    echo "<td width='50'>";
        if ($getCountryFields['country_id'] > 0 )
        {
            echo "<center><input type='button' id='editCountryData".$row_counter."' value='редактировать'></center></td>";
        } else 
        {
            echo "";
        }
    echo "</td>";
    echo "<td width='50'>";
        if ($getCountryFields['country_id'] > 0 )
        {
            echo "<center><input type='button' id='saveCountryData".$row_counter."' value='сохранить' disabled></center></td>";
        } else 
        {
            echo "";
        }
    echo "</td>";
    /*
    echo "<td width='50'>";
        if ($getCountryFields['country_id'] > 0 )
        {
            echo "<center><input type='button' id='deleteCountryData".$row_counter."' value='удалить'></center></td>";
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