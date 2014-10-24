<?php

include ('../../setup/mysql_settings.php');

session_start();

    mysql_query("SET NAMES 'utf8'");
    mysql_query("SET CHARACTER SET 'utf8'");

if($_SESSION['uname']!='admin'){
    header("location: ../index");
}

echo "Добро пожаловать! Вы зашли, как: ".$_SESSION['uname']."!";

$queryCounServ = mysql_query("SELECT system_countries.country_name, system_services.service_name, system_con_serv.id_con_ser FROM system_services INNER JOIN (system_countries INNER JOIN system_con_serv ON system_countries.country_id = system_con_serv.country_id) ON system_services.service_id = system_con_serv.service_id ORDER BY system_countries.country_id ASC");

$queryServPods = mysql_query("SELECT system_services.service_name, system_podservice.podservice_name, system_serv_pod.id_ser_pod FROM system_podservice INNER JOIN (system_services INNER JOIN system_serv_pod ON system_services.service_id = system_serv_pod.service_id) ON system_podservice.podservice_id = system_serv_pod.podservice_id ORDER BY system_services.service_id ASC");

?>

<html lang="en-gb" dir="ltr">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Административная панель - Редактирование соотношения сущностей</title>
	<link rel="shortcut icon" href="docs/images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="docs/images/apple-touch-icon.png">
        <link rel="stylesheet" href="../css/uikit.css">
        <script src="../../js/jquery/jquery-1.10.2.js"></script>
        <script src="../../js/functions/function_AdminOperations.js"></script>
    </head>
    <body class="tm-background">
        <center><input value="Вернуться назад" onclick="location.href='../adminpanel'" type="button" style="width: 150px"> <input value="Пользователи" onclick="location.href='admusers.php'" type="button" style="width: 150px"> <input value="Роли" onclick="location.href='admroles.php'" type="button" style="width: 150px"> <input value="Страны" onclick="location.href='admcountries.php'" type="button" style="width: 150px"> <input value="Услуги" onclick="location.href='admservices.php'" type="button" style="width: 150px"> <input value="Подуслуги" onclick="location.href='admpodservices.php'" type="button" style="width: 150px"> <input value="Пакеты" onclick="location.href='admpackets.php'" type="button" style="width: 150px"> <input value="Соотношение пакетных услуг" onclick="location.href='admpacketsrelation.php'" type="button" style="width: 200px"></center>
        <hr>
        <center><h2>Редактировать соотношения сущностей</h2></center>
        <hr>
        <table border='1' cellspacing='0' cellpadding='0' align='center'>
            <tr>
                <td>
                    <table border='1' cellspacing='0' cellpadding='0' align='left'>
                        <tr>
                            <td width='800' colspan='3'>
                                <center>
                                    <b>
                                        Соотношение стран и услуг
                                    </b>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td width='800' colspan='3'>
                                <center>
                                        <select id='select_country'><option value=>страна не выбрана</option></select> <select id='select_service1'><option value=>услуга не назначена</option></select> <input type='button' id='insertContServ' value='применить'>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td width='800' colspan='3'><br></td>
                        </tr>
                        <?php
                            while($CounServOutput = mysql_fetch_array($queryCounServ)) 
                            {
                                echo        "<tr>";
                                echo            "<td><center>".$CounServOutput['country_name']."</center></td>";
                                echo            "<td><center>".$CounServOutput['service_name']."</center></td>";
                                echo            "<td width='100'><center><img src='../../icons/bullet_cross.png' alt='удалить' title='удалить' onclick='deleteContServ(".$CounServOutput['id_con_ser'].")'></center></td>";
                                echo        "</tr>";
                            }
                        ?>
                    </table>
                    <table border='1' cellspacing='0' cellpadding='0' align='right'>
                        <tr>
                            <td width='800' colspan='3'>
                                <center>
                                    <b>
                                        Соотношение услуг и подуслуг
                                    </b>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td width='800' colspan='3'>
                                <center>
                                    <select id='select_service2'><option value=>услуга не назначена</option></select> <select id='select_podservice'><option value=>подуслуга не назначена</option></select> <input type='button' id='insertServPods' value='применить'>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td width='800' colspan='3'><br></td>
                        </tr>
                        <?php
                            while($ServPodsOutput = mysql_fetch_array($queryServPods)) 
                            {
                                echo        "<tr>";
                                echo            "<td><center>".$ServPodsOutput['service_name']."</center></td>";
                                echo            "<td><center>".$ServPodsOutput['podservice_name']."</center></td>";
                                echo            "<td width='100'><center><img src='../../icons/bullet_cross.png' alt='удалить' title='удалить' onclick='deleteServPods(".$ServPodsOutput['id_ser_pod'].")'></center></td>";
                                echo        "</tr>";
                            }
                        ?>
                    </table>
                </td>
            </tr>
        </table>
    </body>
    <script>
    function deleteContServ(indexContServ) {
        var index = indexContServ;
        var answer = confirm ('Запись будет удалена! Продолжить?');
        if (answer) 
        $.post( 
            "../../ajax_scripts/deleteContServRelation.php",
            {   
                idToDelete : index,
                dataType: "json"
            },
            function(success) {
                alert(success);
                location.reload();
            }
        );
    }
            
    function deleteServPods(indexPodsServ) {
        var index = indexPodsServ;
        var answer = confirm ('Запись будет удалена! Продолжить?');
        if (answer) 
        $.post( 
            "../../ajax_scripts/deleteServPodsRelation.php",
            {   
                idToDelete : index,
                dataType: "json"
            },
            function(success) {
                alert(success);
                location.reload();
            }
        );
    }
    </script>
</html>   


