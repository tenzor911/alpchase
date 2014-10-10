<?php

include ('../../setup/mysql_settings.php');
include ('../../ajax_scripts/loadPackets.php');

session_start();

    mysql_query("SET NAMES 'utf8'");
    mysql_query("SET CHARACTER SET 'utf8'");

if($_SESSION['uname']!='admin'){
    header("location: ../index");
}

echo "Добро пожаловать! Вы зашли, как: ".$_SESSION['uname']."!";

$loadPacketData = new loadPackets();

?>

<html lang="en-gb" dir="ltr">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Административная панель - Редактирование соотношения пакетных услуг</title>
	<link rel="shortcut icon" href="docs/images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="docs/images/apple-touch-icon.png">
        <link rel="stylesheet" href="../css/uikit.css">
        <script src="../../js/jquery/jquery-1.10.2.js"></script>
        <script src="../../js/functions/function_AdminOperations.js"></script>
        <script src="../../js/functions/function_OnlyNumbersField.js"></script>
    </head>
    <body class="tm-background">
        <center><input value="Вернуться назад" onclick="location.href='../adminpanel'" type="button" style="width: 150px"> <input value="Пользователи" onclick="location.href='admusers.php'" type="button" style="width: 150px"> <input value="Роли" onclick="location.href='admroles.php'" type="button" style="width: 150px"> <input value="Страны" onclick="location.href='admcountries.php'" type="button" style="width: 150px"> <input value="Услуги" onclick="location.href='admservices.php'" type="button" style="width: 150px"> <input value="Подуслуги" onclick="location.href='admpodservices.php'" type="button" style="width: 150px"> <input value="Пакеты" onclick="location.href='admpackets.php'" type="button" style="width: 150px"> <input value="Соотношения" onclick="location.href='admrelations.php'" type="button" style="width: 150px"></center>
        <hr>
        <center><h2>Редактировать соотношения пакетных услуг</h2></center>
        <hr>
        <form id='relations'>
            <center>
                <select id='select_country' name='select_country'><option value=>страна не выбрана</option></select> <select id='select_service1' name='select_service'><option value=>услуга не назначена</option></select> <select id='select_podservice' name='select_podservice'><option value=>подуслуга не назначена</option></select> <input type='button' id='submitForm' value='сохранить'>
            </center>
            <br>
            <table border='1' cellspacing='0' cellpadding='0' align='center'>
                <tr>
                    <td width='80'>
                        <center>№</center>
                    </td>
                    <td width='500'>
                        <center>Наименование пакетной услуги</center>
                    </td>
                    <td width='150'>
                        <center>Задействовать пакет</center>
                    </td>
                </tr>
                <?php $loadPacketData->loadTableWithPackets();?>
            </table>
        </form>
        <hr>
        <script>
            
             $("#submitForm").click(function(){    
                var formData = $("#relations").serialize();

                $.post( 
                    "../../ajax_scripts/getPacketsData.php",
                    {   
                        myData: formData,
                        dataType: "json"
                    },
                    function(success) {
                        alert(success);
                    }
                );
            });
            
            
            function loadCommonPriceWindow(id) {
                var getCheckBox = document.getElementById('packetState' + id).checked;
                var getPriceBox = document.getElementById('packetIdValue' + id);
                if (getCheckBox === true)
                {
                    getPriceBox.disabled = false;
                    getPriceBox.value = id;
                }
                else
                {
                    getPriceBox.disabled = true;
                    getPriceBox.value = '';
                }
            }
            
        </script>
    </body>
</html> 