<?php 

include('../setup/mysql_settings.php');

session_start();

    mysql_query("SET NAMES 'utf8'");
    mysql_query("SET CHARACTER SET 'utf8'");

if($_SESSION['uname']!='admin'){
    header("location: ../index");
}

echo "Добро пожаловать! Вы зашли, как: ".$_SESSION['uname']."!";

?>

<html lang="en-gb" dir="ltr">
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Административная панель</title>
	<link rel="shortcut icon" href="docs/images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="docs/images/apple-touch-icon.png">
        <script src="../js/jquery/jquery-1.10.2.js"></script>
    </head>
    <body class="tm-background">
        <hr>
            <input value="Редактировать список пользователей" onclick="location.href='adminzone/admusers.php'" type="button" style="width: 300px"> - Здесь можно добавлять и редактировать список пользователей системы.
        <hr>
            <input value="Редактировать список ролей" onclick="location.href='adminzone/admroles.php'" type="button" style="width: 300px"> - Роли пользователей. Их следует назначать, чтобы определить какие страны будет видеть, тот или иной пользователь.
        <hr>
           <input value="Редактировать список стран" onclick="location.href='adminzone/admcountries.php'" type="button" style="width: 300px"> - Здесь можно добавлять и редактировать список стран и офшоров.
        <hr>
           <input value="Редактировать список услуг" onclick="location.href='adminzone/admservices.php'" type="button" style="width: 300px"> - Здесь можно добавлять и редактировать список услуг.
        <hr>
           <input value="Редактировать список подуслуг" onclick="location.href='adminzone/admpodservices.php'" type="button" style="width: 300px"> - Здесь можно добавлять и редактировать пункты, на которые могут подразделяться услуги.
        <hr>
           <input value="Редактировать список пакетов" onclick="location.href='adminzone/admpackets.php'" type="button" style="width: 300px"> - Здесь можно добавлять и редактировать список пакетов услуг, которые будут доступны конечному пользователю.
        <hr>
          <input value="Редактировать соотношения сущностей" onclick="location.href='adminzone/admrelations.php'" type="button" style="width: 300px"> - Здесь можно редактировать привязку подуслуг к услугам, а так же услуг к странам.
        <hr>
          <input value="Редактировать соотношения пакетных услуг" onclick="location.href='adminzone/admpacketsrelation.php'" type="button" style="width: 300px"> - Здесь можно редактировать привязку пакетов к различным выборкам стран, услуг и пакетов.
        <hr>
           <input value="Назад к навигации" onclick="location.href='navigation'" type="button" style="width: 300px">
        <hr>
    </body>
</html>    