<?php 

include('../setup/mysql_settings.php');

session_start();

    mysql_query("SET NAMES 'utf8'");
    mysql_query("SET CHARACTER SET 'utf8'");

if(!$_SESSION['uname']){
    header("location: ../index");
}

echo "Welcome ".$_SESSION['uname']."! <a href='../logout'>Logout Here</a></h1>";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en-gb" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ALPCHASE - Реестр анкет клиентов</title>
        <script type="text/javascript" src="../js/ajaxLoadRegistryData.js"> </script>
        <script type="text/javascript" src="../js/jquery-1.10.2.js"> </script>
        <link rel="stylesheet" type="text/css" href="../css/styleRegistry.css">   </link>   
    </head>
    <body onload="refreshRegistryData()">
        <hr></hr>
        <center><select name='' id="filter_option">
            <option value='*'>критерий фильтра не указан</option>
            <option value='quest_status'>статус анкеты</option>
            <option value='customer_country'>страна обращения</option>
            <option value='customer_city'>город обращения</option>
            <option value=''>страна услуги</option>
            <option value=''>город услуги</option>
            <option value=''>наименование услуги</option>
        </select>
            <select name='' id="filter_parameter"></select></center>
        <br></br>
        <div id="data_field" align="center">Загрузка данных...</div>
    </body>
    <script>
      $(document).ready(function() {
        $("#filter_option").change(function(){
          $.post( 
             "../ajax_scripts/filterDataUpdate.php",
             {name_select: $(this).val() },
             function(data) {
                $('#filter_parameter').html(data);
             }
          );
        });
      });
    </script>
    <script>
        $("#filter_parameter").change(function(){
          $.post( 
             "../ajax_scripts/loadRegistryData.php",
             { parameter: $(this).val(), name_select2: $('#filter_option').val() },
             function(success) {
                $('#data_field').html(success);
             }
          );
        });
    </script>
    
</html>
