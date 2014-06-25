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
                <td width='40'><center><b>№</b></center></td>
                <td width='60'><center><b>Дата</b></center></td>
                <td width='200'><center><b>ФИО</b></center></td>
                <td width='180'><center><b>Email</b></center></td>
                <td width='140'><center><b>Телефон</b></center></td>
                <td width='200'><center><b>Наименование компании</b></center></td>
                <td width='120'><center><b>Страна обращения</b></center></td>
                <td width='120'><center><b>Город обращения</b></center></td>
                <td width='120'><center><b>Страна услуги</b></center></td>
                <td width='200'><center><b>Наименование услуги</b></center></td>
                <td width='240' colspan='3'><center><b>Опции</b></center></td>
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
        echo    "<td width='80'><center><input type=button value=редактировать onclick=location.href='../system/draftEdit.php?edit=".$data['customer_id']." style='width:100;height:21'/></td>";
        if ($data['customer_email'] != '')
        { 
            echo " <td width='80'><input type=button value='известить клиента' onclick=location.href='../system/draftChange.php?change=".$data['customer_id']."' style='width:130;height:21'/></center></td>"; 
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
            <td width='40'><center><b>№</b></center></td>
            <td width='60'><center><b>Дата</b></center></td>
            <td width='200'><center><b>ФИО</b></center></td>
            <td width='180'><center><b>Email</b></center></td>
            <td width='140'><center><b>Телефон</b></center></td>
            <td width='200'><center><b>Наименование компании</b></center></td>
            <td width='120'><center><b>Страна обращения</b></center></td>
            <td width='120'><center><b>Город обращения</b></center></td>
            <td width='120'><center><b>Страна услуги</b></center></td>
            <td width='200'><center><b>Наименование услуги</b></center></td>
            <td width='200'><center><b>Опции</b></center></td>
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
            <td width='40'><center><b>№</b></center></td>
            <td width='60'><center><b>Дата</b></center></td>
            <td width='200'><center><b>ФИО</b></center></td>
            <td width='180'><center><b>Email</b></center></td>
            <td width='140'><center><b>Телефон</b></center></td>
            <td width='200'><center><b>Наименование компании</b></center></td>
            <td width='120'><center><b>Страна обращения</b></center></td>
            <td width='120'><center><b>Город обращения</b></center></td>
            <td width='120'><center><b>Страна услуги</b></center></td>
            <td width='200'><center><b>Наименование услуги</b></center></td>
            <td width='240' colspan='3'><center><b>Опции</b></center></td>
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
        echo    "<td width='20'><center><a href='../system/draftEdit.php?edit=".$data['customer_id']."'><img src='../icons/bullet_edit.png' alt='редактировать' title='редактировать'></a></center></td>"; 
        echo    "<td width='20'>"; 
        if ($data['customer_email'] != '')
        { 
            echo "<center><a href='../system/draftChange.php?change=".$data['customer_id']."'><img src='../icons/mail.png' alt='известить клиента' title='известить клиента'></a></center></td>"; 
        }
        echo    "<td width='20'><center><a href='#'><img src='../icons/bullet_cross.png' id='deleteData' onclick='away(".$data['customer_id'].")' alt='удалить' title='удалить'></a></center></td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
<script>
    function away(dataNumber)   {
        var answer = confirm ('Запись будет удалена! Продолжить?')
        if (answer) { 
            window.location='../system/draftDelete.php?delete='+dataNumber;  
        }   
    } 
</script>