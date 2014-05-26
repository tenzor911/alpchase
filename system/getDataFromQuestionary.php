<meta http-equiv='refresh' content='[3];URL=../templates/questionary'>

<?php

include('../setup/mysql_settings.php');

$date_today = date("d.m.y");
$cust_name = $_REQUEST['cust_name'];
$cust_surname = $_REQUEST['cust_surname'];
$cust_middle = $_REQUEST['cust_middle'];
$cust_companyname = $_REQUEST['cust_companyname'];
$cust_position = $_REQUEST['cust_position'];
$cust_email = $_REQUEST['cust_email'];
$cust_pass = $_REQUEST['cust_pass'];
$cust_primphone = $_REQUEST['cust_primphone'];
$cust_addphone = $_REQUEST['cust_addphone'];
$cust_country = $_REQUEST['cust_country'];
$cust_city = $_REQUEST['cust_city'];
$cust_trustee = $_REQUEST['cust_trustee'];
$cust_knowabout = $_POST['cust_knowabout'];
$cust_questions = $_REQUEST['cust_questions'];
$cust_answers = $_REQUEST['cust_answers'];

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");


$visitor_email = "office@alpchase.com";

$headerFields = array(
    "From: {$visitor_email}",
    "MIME-Version: 1.0",
    "Content-Type: text/html;charset=utf-8"
);

$emailSubject = "Коммерческое приложение ООО АЛП энд ЧЕЙЗ";
$emailMessage = "   
    Добрый день,
    
    Проследуйте по ссылке в ваш личный кабинет, чтобы ознакомиться с нашим коммерческим предложением. 
    
    ссылка на личный кабинет: http://alpchase-test.url.ph/customer
    ваш логин: $cust_email
    ваш пароль: $cust_pass
    
    Надеюсь, Ваши намерения по началу работы на данном рынке достаточно серьезны.
    Предлагаю созвониться или договориться о встрече для детализации условий совместной работы.
    Подтвердите получение, пожалуйста.

    С уважением,
    Ананян Анна

    119049, Москва,
    1-й Спасоналивковский пер., 16.
    +7 (499) 23 800 23";


/*if ($_POST['dynfields1']) 
    {
        foreach ( $_POST['dynfields1'] as $key=>$value ) 
        {
            $values = mysql_real_escape_string($value);
            $query = mysql_query("INSERT INTO order_basket (country_id) VALUES ('$values')");
        }
    }
echo "<i><h2><strong>" . count($_POST['dynfields1']) . "</strong> Hobbies Added</h2></i>";******/

mysql_query("INSERT INTO users_customers (quest_date,customer_name,customer_surn,customer_midd, customer_compname, customer_position, customer_email, customer_pass, customer_primaryphone, customer_additphone, customer_country, customer_city, customer_duty, customer_knowabout, customer_questions, customer_answers, quest_status) VALUES ('$date_today','$cust_name', '$cust_surname', '$cust_middle', '$cust_companyname', '$cust_position', '$cust_email', md5('$cust_pass'), '$cust_primphone', '$cust_addphone', '$cust_country', '$cust_city', '$cust_trustee', '$cust_knowabout', '$cust_questions', '$cust_answers', 'извещён')");

mail($cust_email, $emailSubject, $emailMessage);
//$sendingEmail->getLoginPass($cust_email, $cust_pass);
//$sendingEmail->emailMethod();
echo "Анкета успешно оформлена! Вы будете перенаправлены назад через 3 секунды!";

?>