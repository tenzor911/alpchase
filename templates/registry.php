<?php 

include('../setup/mysql_settings.php');

session_start();

    mysql_query("SET NAMES 'utf8'");
    mysql_query("SET CHARACTER SET 'utf8'");

if(!$_SESSION['uname']){
    header("location: ../index");
}

echo "Добро пожаловать! Вы зашли, как: ".$_SESSION['uname']."!";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en-gb" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ALPCHASE - Реестр анкет клиентов</title>
        <script type="text/javascript" src="../js/functions/function_DeleteStringData.js"></script>
        <script type="text/javascript" src="../js/jquery/jquery-1.10.2.js"> </script> 
    </head>
    <body>
        <hr>      
            <input type="button" value="создать новую анкету" onclick="location.href='../templates/questionary'"><input type="button" value="просмотр черновиков" onclick="location.href='../templates/drafts'"><input type="button" value="выход из системы" onclick="location.href='../logout'">
        <hr>
        <center>
            <select name='' id="filter_option">
                <option value='null'>критерий фильтра не указан</option>
                <option value='quest_status'>статус анкеты</option>
                <option value='customer_country'>страна обращения</option>
                <option value='customer_city'>город обращения</option>
            </select>
            <select name='' id="filter_parameter"></select>
            <input type="text" value="" id="search_data" placeholder="введите название фирмы" style="width: 220px;">
            <input type="button" value="сброс критериев поиска" onclick="location.reload();">
        </center>
        <br></br>
        <div id="data_field" align="center">Загрузка данных...</div>
            <script>
                $(document).ready(function() {
                    
                    $("#filter_option").change(function(){
                        $.post( 
                            "../ajax_scripts/filterDataUpdate.php",
                            {filter_data_select: $(this).val() },
                            function(data) {
                                $('#filter_parameter').html(data);
                                $("#data_field").val("0");
                            }
                        );
                    });
       
                    $("#filter_parameter").click(function(){    
                        $.post( 
                            "../ajax_scripts/loadRegistryData.php",
                            {parameter: $(this).val(), filter_parameter_select: $('#filter_option').val() },
                            function(success) {
                                $('#data_field').html(success);    
                            }
                        );
                    });
    
                    $("#search_data").keyup(function(){
                        $.post( 
                            "../ajax_scripts/loadRegistryData.php",
                            {company_search_name: $(this).val() },
                            function(data) {
                                $('#data_field').html(data);
                            }
                        );
                    }); 
                    
                    $(document).ready(function(){
                        $("#data_field").load('../ajax_scripts/loadRegistryData.php');
                    });
                });
            </script>
    </body>
</html>
