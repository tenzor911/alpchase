<meta http-equiv="Content-Type" content="text/html; charset=utf8">    
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="css/grayhint.css">
        <script type="text/javascript" src="../js/functions/function_OnlyNumbersField.js"></script>
        <script type="text/javascript" src="../js/functions/function_EditRegistryData.js"></script>
        <script type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
    </head>
    <body>
    </body>
</html>

<?php
include('../setup/mysql_settings.php');

$ID = $_REQUEST['edit'];

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

echo        "<form action ='draftSave.php' method ='post'>";
echo            "<table border='1' width='800' cellpadding='0' cellspacing='0' align='center'>";
echo                "<tr>";
echo                    "<td width='200'><center><b>Информация</b></center></td>";
echo                    "<td width='600' colspan='3'><center><b>Поле для редактирования</center></b></td>";
echo                "</tr>";

if ($request_info=mysql_query("SELECT * FROM users_customers where customer_id ='$ID'"))
    {
        $returned_info = mysql_fetch_array($request_info);
            
                echo "<tr>
                        <td><b>№</b></td>
                        <td width='600' colspan='3'><input type=text name=edit_id size='1' readonly=readonly value=".$returned_info['customer_id']."></td>
                      </tr>       
                        <td><b>Дата</b></td>
                        <td width='600' colspan='3'><input type=text name=edit_date size='25' readonly=readonly value=".$returned_info['quest_date']."></td>
                      <tr>     
                        <td><b>ФИО</b></td>
                        <td width='600' colspan='3'><input type=text name=edit_surn placeholder='введите фамилию' size='25' value=".$returned_info['customer_surn']."><input type=text name=edit_name placeholder='введите имя' size='25' value=".$returned_info['customer_name']."><input type=text name=edit_midd placeholder='введите отчество' size='25' value=".$returned_info['customer_midd']."></td>
                      </tr>
                      <tr>
                        <td><b>Email</b></td>
                        <td width='600' colspan='3'><input type=text name=edit_email placeholder='введите email' size='25' value=".$returned_info['customer_email']."></td>
                      </tr>
                      <tr>
                        <td><b>Основной телефон</b></td>
                        <td width='600' colspan='3'><input type=text name=edit_primphone placeholder='введите телефон' onkeypress='return isNumber(event)' size='25' value=".$returned_info['customer_primaryphone']."></td>
                      </tr> 
                      <tr>
                        <td><b>Дополнительный телефон</b></td>
                        <td width='600' colspan='3'><input type=text name=edit_addphone placeholder='введите телефон' onkeypress='return isNumber(event)' size='25' value=".$returned_info['customer_additphone']."></td>
                      </tr>
                      <tr>
                        <td><b>Наименование компании</b></td>
                        <td width='600' colspan='3'><input type=text name=edit_compname placeholder='введите имя компании' size='25' value=".$returned_info['customer_compname']."></td>
                      </tr>
                      <tr>
                        <td><b>Страна обращения</b></td>
                        <td width='600' colspan='3'><input type=text name=edit_country placeholder='введите страну' size='25' value=".$returned_info['customer_country']."></td>
                      <tr>
                        <td><b>Город обращения</b></td>
                        <td width='600' colspan='3'><input type=text name=edit_city placeholder='введите город' size='25' value=".$returned_info['customer_city']."></td>
                      </tr>";   
                
    echo       "<tr>
                    <td width='800' colspan='4'><center><b>Опции</center></b></td>
                </tr>
                <tr>
                    <td height='26'><center><button type='button' onclick='dropData()'style='width:60px' alt='очистить все поля' title='очистить все поля'><img src='../icons/asterisk_red.png'></button></center></td>
                    <td height='26'><center><button type='button' onclick='reviveData()' style='width:60px' alt='отменить все действия' title='отменить все действия'><img src='../icons/reload.png'></button></center></td>
                    <td height='26'><center><button type='button' style='width:60px' alt='не сохранять изменения' title='не сохранять изменения'><img src='../icons/decline.png'></button></center></td>
                    <td height='26'><center><button type='submit' style='width:60px' alt='сохранить изменения' title='сохранить изменения'><img src='../icons/disk_black.png'></button></center></td>
                </tr>
            </table>";            
            
    }
    echo        "</table>";
    echo    "</form>";    
?>

