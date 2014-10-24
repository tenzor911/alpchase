<?php

date_default_timezone_set('Europe/Moscow');

putenv("TZ=Europe/Moscow");

include('./setup/mysql_settings.php');

$userSubscriptionTime = mysql_query("SELECT time FROM test WHERE id='10'");
$getSubscrTime = mysql_fetch_array($userSubscriptionTime);

$time = strtotime($getSubscrTime['time']);
echo "Unix registration time unix: ".$time."<p>";

$user_registration_time = $getSubscrTime['time'];
echo "User registration time: ".$user_registration_time."<p>";



$timetonextletter = $time + 1*4*61*60;
echo "Next letter unix: ".$timetonextletter."<p>";

$nextLetterTime = gmdate("Y-m-d H:i:s",$timetonextletter);
echo "Next letter: ".$nextLetterTime."<p>";

$currentTime = date("Y-m-d H:i:s",time());
echo "Current time unix: ".strtotime($currentTime)."<p>";
echo "Current time: ".$currentTime."<p>";

if($currentTime > $nextLetterTime) 
{ 
	//mail('braindead@bk.ru', 'тест', 'тест', 'From: tenzormail@gmail.com');
	
	echo "клиент извещён!";
        mysql_query("UPDATE test SET time='".$currentTime."' WHERE id='10'");
}
	else 
{
	echo "Ожидание письма!"."<p>";
        echo "Клиент будет извещён: ".$nextLetterTime."";
}


?>