<?php
include('../setup/mysql_settings.php');

$ID = $_REQUEST['edit'];

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

echo "<form action ='questionarySave.php' method ='post'>";
echo "<table width='2200' border='1' cellpadding='0' cellspacing='0' align='center'>
        <tr>
            <td width='40'><center>№</center></td>
            <td width='40'><center>Дата</center></td>
            <td width='200'><center>ФИО</center></td>
            <td width='160'><center>Email</center></td>
            <td width='120'><center>Телефон</center></td>
            <td width='120'><center>Дополнительный телефон</center></td>
            <td width='160'><center>Наименование компании</center></td>
            <td width='120'><center>Страна обращения</center></td>
            <td width='120'><center>Город обращения</center></td>
            <td width='100'><center>Опции</center></td>
        </tr>";

if ($request_info=mysql_query("SELECT * FROM users_customers where customer_id ='$ID'"))
    {
        while($returned_info = mysql_fetch_array($request_info))
            {
                echo "<tr>
                        <td width='40'><center><input type=text name=edit_id size='1' readonly=readonly value=".$returned_info['customer_id']."></center></td>
                        <td width='40'><center><input type=text name=edit_date size='14' value=".$returned_info['quest_date']."></center></td>
                        <td width='200'><center><input type=text name=edit_surn size='10' value=".$returned_info['customer_surn']."><input type=text name=edit_name size='10' value=".$returned_info['customer_name']."><input type=text name=edit_midd size='10' value=".$returned_info['customer_midd']."></center></td>
                        <td width='160'><center><input type=text name=edit_email size='24' value=".$returned_info['customer_email']."></center></td>
                        <td width='120'><center><input type=text name=edit_primphone size='20' value=".$returned_info['customer_primaryphone']."></center></td>
                        <td width='120'><center><input type=text name=edit_addphone size='20' value=".$returned_info['customer_additphone']."></center></td>
                        <td width='160'><center><input type=text name=edit_compname size='20' value=".$returned_info['customer_compname']."></center></td>
                        <td width='120'><center><input type=text name=edit_country size='15' value=".$returned_info['customer_country']."></center></td>
                        <td width='120'><center><input type=text name=edit_city size='15' value=".$returned_info['customer_city']."></center></td>
                        <td width='60'><center><input type=submit value=сохранить></center></td>
                    </tr>";   
            }
    }
        echo "</table>";
        echo "</form>";
?>