<?php
include('../setup/mysql_settings.php');
include('../classes/system/dataEdit.php');

$dataId = $_REQUEST['edit'];

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$loadDataForEdit = new dataEdit();
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf8">    
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="css/grayhint.css">
        <script type="text/javascript" src="../js/functions/function_OnlyNumbersField.js"></script>
        <script type="text/javascript" src="../js/functions/function_EditRegistryData.js"></script>
        <script type="text/javascript" src="../js/jquery/jquery-1.10.2.js"></script>
    </head>
    <body>
        <center><h2>Редактирование записи черновика</h2></center>
        <form action ='draftSave.php' method ='post' id='draftDataForm'>
            <table border='1' width='600' cellpadding='0' cellspacing='0' align='center'>
                <tr>
                    <td width='200'><center><b>Информация</b></center></td>
                    <td width='400' colspan='3'><center><b>Поле для редактирования</center></b></td>
                </tr>
                <?php $loadDataForEdit->loadDataForEdit($dataId); ?>
                <tr>
                    <td width='200' colspan='3'><center><b>Опции</center></b></td>
                </tr>
                <tr>
                    <td height='26'><center><button type='button' style='width:60px' alt='очистить все поля' title='очистить все поля' onclick='dropData()'><img src='../icons/asterisk_red.png'></button></center></td>
                    <td height='26'><center><button type='button' style='width:60px' alt='отменить все действия' title='отменить все действия' onclick='reviveData()'><img src='../icons/reload.png'></button></center></td>
                    <td height='26'><center><button type='button' style='width:60px' alt='сохранить изменения' title='сохранить изменения' id='saveDraftFormButton'><img src='../icons/disk_black.png'></button></center></td>
                </tr>
            </table> 
            <table border="1" width="800" cellpadding="0" cellspacing="0" align="center" id="mytable">
                <tr>
                    <td colspan="4"><center><b>Секция услуг</b></center></td>
                </tr>
                <tr>
                    <td width="200"><center><b>Страна</b></center></td>
                    <td width="200"><center><b>Услуга</b></center></td>
                    <td width="200"><center><b>Подуслуга</b></center></td>
                    <td width="200"><center><b>Опции</b></center></td>
                </tr>
                <?php $loadDataForEdit->loadCustomerBasket($dataId); ?>
            </table> 
            <table border="1" width="800" cellpadding="0" cellspacing="0" align="center">
                <tr>
                    <td colspan="4"><center><input type="button" value="добавить ряд" onclick="addSection()"></center></td>
                </tr>
            </table>
        </form>
        <script>
            $("#saveDraftFormButton").click(function(){    
                formData = $("#draftDataForm").serialize();
                $.post( 
                    "../system/dataSave.php",
                    {   
                        myData: formData,
                        dataType: "json"
                    },
                    function(success) {
                        alert('Редактирование черновика завершено! '+success);
                        window.location.href = '../templates/drafts';
                    }
                );
            });
        </script>
    </body>
</html>


