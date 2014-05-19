<?php

include ('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

if( isset($_POST["parameter"]) )
{
    $param= $_REQUEST['parameter'];
    $filt = $_REQUEST['name_select2'];

    $result=mysql_query("SELECT * FROM users_customers WHERE $filt = '$param'");
    
    echo "
    <table width='2000' border='1' cellpadding='0' cellspacing='0' align='center'>
        <tr>
            <td width='40'>№</td>
            <td width='100'>Дата</td>
            <td width='100'>Статус</td>
            <td width='300'>ФИО</td>
            <td width='200'>Email</td>
            <td width='140'>Телефон</td>
            <td width='200'>Наименование компании</td>
            <td width='180'>Страна обращения</td>
            <td width='140'>Город обращения</td>
            <td width='180'>Страна услуги</td>
            <td width='140'>Город услуги</td>
            <td width='300'>Наименование услуги</td>
        </tr>";


    while($data = mysql_fetch_assoc($result))
{   
    echo "<tr>";
    echo    "<td width='40'>".$data['customer_id']."</td>";
    echo    "<td width='100'>".$data['quest_date']."</td>";
    echo    "<td width='100'>".$data['quest_status']."</td>";
    echo    "<td width='200'>".$data['customer_surn']." ".$data['customer_name']." ".$data['customer_midd']."</td>";
    echo    "<td width='200'>".$data['customer_email']."</td>";
    echo    "<td width='140'>".$data['customer_primaryphone']."</td>";
    echo    "<td width='200'>".$data['customer_compname']."</td>";
    echo    "<td width='180'>".$data['customer_country']."</td>";
    echo    "<td width='140'>".$data['customer_city']."</td>";
    echo    "<td width='180'>".$data['customer_country']."</td>";
    echo    "<td width='140'>".$data['customer_compname']."</td>";
    echo    "<td width='300'>".$data['customer_compname']."</td>";
    echo "</tr>";
}
echo "</table>";
}

echo "<hr>";
$result2=mysql_query("SELECT * FROM users_customers");

echo "
    <table width='2000' border='1' cellpadding='0' cellspacing='0' align='center'>
        <tr>
            <td width='40'>№</td>
            <td width='100'>Дата</td>
            <td width='100'>Статус</td>
            <td width='300'>ФИО</td>
            <td width='200'>Email</td>
            <td width='140'>Телефон</td>
            <td width='200'>Наименование компании</td>
            <td width='180'>Страна обращения</td>
            <td width='140'>Город обращения</td>
            <td width='180'>Страна услуги</td>
            <td width='140'>Город услуги</td>
            <td width='300'>Наименование услуги</td>
        </tr>";


    while($data1 = mysql_fetch_assoc($result2))
{   
    echo "<tr>";
    echo    "<td width='40'>".$data1['customer_id']."</td>";
    echo    "<td width='100'>".$data1['quest_date']."</td>";
    echo    "<td width='100'>".$data1['quest_status']."</td>";
    echo    "<td width='200'>".$data1['customer_surn']." ".$data1['customer_name']." ".$data1['customer_midd']."</td>";
    echo    "<td width='200'>".$data1['customer_email']."</td>";
    echo    "<td width='140'>".$data1['customer_primaryphone']."</td>";
    echo    "<td width='200'>".$data1['customer_compname']."</td>";
    echo    "<td width='180'>".$data1['customer_country']."</td>";
    echo    "<td width='140'>".$data1['customer_city']."</td>";
    echo    "<td width='180'>".$data1['customer_country']."</td>";
    echo    "<td width='140'>".$data1['customer_compname']."</td>";
    echo    "<td width='300'>".$data1['customer_compname']."</td>";
    echo "</tr>";
}
echo "</table>";


?>