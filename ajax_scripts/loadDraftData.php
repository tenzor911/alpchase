<?php

include ('../setup/mysql_settings.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

if( isset($_POST["parameter"]) )
{
    $parameter = $_REQUEST['parameter'];
    $filter = $_REQUEST['filter_parameter_select'];
    
    $result = mysql_query("SELECT * FROM users_customers WHERE $filter = '$parameter' AND quest_status = 'черновик'");

    echo "
        <table width='2200' border='1' cellpadding='0' cellspacing='0' align='center'>
            <tr>
                <td width='40'><center>№</center></td>
                <td width='60'><center>Дата</center></td>
                <td width='200'><center>ФИО</center></td>
                <td width='180'><center>Email</center></td>
                <td width='140'><center>Телефон</center></td>
                <td width='200'><center>Наименование компании</center></td>
                <td width='120'><center>Страна обращения</center></td>
                <td width='120'><center>Город обращения</center></td>
                <td width='120'><center>Страна услуги</center></td>
                <td width='200'><center>Наименование услуги</center></td>
                <td width='200'><center>Опции</center></td>
            </tr>";

    while($data = mysql_fetch_assoc($result))
    {   
        echo "<tr>";
        echo    "<td width='40'>".$data['customer_id']."</td>";
        echo    "<td width='60'>".$data['quest_date']."</td>";
        echo    "<td width='200'>".$data['customer_surn']." ".$data['customer_name']." ".$data['customer_midd']."</td>";
        echo    "<td width='180'>".$data['customer_email']."</td>";
        echo    "<td width='140'>".$data['customer_primaryphone']."</td>";
        echo    "<td width='200'>".$data['customer_compname']."</td>";
        echo    "<td width='120'>".$data['customer_country']."</td>";
        echo    "<td width='120'>".$data['customer_city']."</td>";
        echo    "<td width='120'>".$data['customer_country']."</td>";
        echo    "<td width='200'>".$data['customer_compname']."</td>";
        echo    "<td width='200'><center><input type=button value=редактировать onclick=location.href='../system/draftEdit.php?edit=".$data['customer_id']." style='width:100;height:21'/>";
        if ($data['customer_email'] != '')
        { 
            echo " <input type=button value='известить клиента' onclick=location.href='../system/draftChange.php?change=".$data['customer_id']."' style='width:130;height:21'/></center></td>"; 
        }
        echo "</tr>";
     }
        echo "</table>";

} elseif (isset($_POST["company_search_name"])){
    $company_data = $_REQUEST['company_search_name'];
    $result = mysql_query("SELECT * FROM users_customers WHERE customer_compname LIKE '%$company_data%' AND quest_status = 'черновик'");
    
echo "
    <table width='2200' border='1' cellpadding='0' cellspacing='0' align='center'>
        <tr>
            <td width='40'><center>№</center></td>
            <td width='60'><center>Дата</center></td>
            <td width='200'><center>ФИО</center></td>
            <td width='180'><center>Email</center></td>
            <td width='140'><center>Телефон</center></td>
            <td width='200'><center>Наименование компании</center></td>
            <td width='120'><center>Страна обращения</center></td>
            <td width='120'><center>Город обращения</center></td>
            <td width='120'><center>Страна услуги</center></td>
            <td width='200'><center>Наименование услуги</center></td>
            <td width='200'><center>Опции</center></td>
        </tr>";


    while($data = mysql_fetch_assoc($result))
    {   
        echo "<tr>";
        echo    "<td width='40'>".$data['customer_id']."</td>";
        echo    "<td width='60'>".$data['quest_date']."</td>";
        echo    "<td width='200'>".$data['customer_surn']." ".$data['customer_name']." ".$data['customer_midd']."</td>";
        echo    "<td width='180'>".$data['customer_email']."</td>";
        echo    "<td width='140'>".$data['customer_primaryphone']."</td>";
        echo    "<td width='200'>".$data['customer_compname']."</td>";
        echo    "<td width='120'>".$data['customer_country']."</td>";
        echo    "<td width='120'>".$data['customer_city']."</td>";
        echo    "<td width='120'>".$data['customer_country']."</td>";
        echo    "<td width='200'>".$data['customer_compname']."</td>";
        echo    "<td width='200'><center><input type=button value=редактировать onclick=location.href='../system/draftEdit.php?edit=".$data['customer_id']."' style='width:100;height:21'/>";
        if ($data['customer_email'] != '')
        { 
            echo " <input type=button value='известить клиента' onclick=location.href='../system/draftChange.php?change=".$data['customer_id']." style='width:130;height:21'/></center></td>"; 
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    $result = mysql_query("SELECT * FROM users_customers WHERE quest_status = 'черновик'");
    
    echo "
    <table width='2200' border='1' cellpadding='0' cellspacing='0' align='center'>
        <tr>
            <td width='40'><center>№</center></td>
            <td width='60'><center>Дата</center></td>
            <td width='200'><center>ФИО</center></td>
            <td width='180'><center>Email</center></td>
            <td width='140'><center>Телефон</center></td>
            <td width='200'><center>Наименование компании</center></td>
            <td width='120'><center>Страна обращения</center></td>
            <td width='120'><center>Город обращения</center></td>
            <td width='120'><center>Страна услуги</center></td>
            <td width='200'><center>Наименование услуги</center></td>
            <td width='200'><center>Опции</center></td>
        </tr>";


    while($data = mysql_fetch_assoc($result))
    {   
        echo "<tr>";
        echo    "<td width='40'><center>".$data['customer_id']."</td>";
        echo    "<td width='60'><center>".$data['quest_date']."</td>";
        echo    "<td width='200'><center>".$data['customer_surn']." ".$data['customer_name']." ".$data['customer_midd']."</td>";
        echo    "<td width='180'><center>".$data['customer_email']."</td>";
        echo    "<td width='140'><center>".$data['customer_primaryphone']."</td>";
        echo    "<td width='200'><center>".$data['customer_compname']."</td>";
        echo    "<td width='120'><center>".$data['customer_country']."</td>";
        echo    "<td width='120'><center>".$data['customer_city']."</td>";
        echo    "<td width='120'><center>".$data['customer_country']."</td>";
        echo    "<td width='200'><center>".$data['customer_compname']."</td>";
        echo    "<td width='200'><center><input type=button value=редактировать onclick=location.href='../system/draftEdit.php?edit=".$data['customer_id']."' style='width:100;height:21'/>"; 
        if ($data['customer_email'] != '')
        { 
            echo " <input type=button value='известить клиента' onclick=location.href='../system/draftChange.php?change=".$data['customer_id']." style='width:130;height:21'/></center></td>"; 
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
 