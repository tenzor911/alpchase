<?php
include('../setup/mysql_settings.php');
include('../classes/system/class.passwordGen.php');
include('../classes/email/class.restoreCustomerPassword.php');

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

session_start();
if(isset($_POST["captchaCode"])&&$_POST["captchaCode"]!=""&&$_SESSION["code"]==$_POST["captchaCode"])
{
    $custEmail = $_POST['email'];
    if (!empty($_POST['email'])) {
        $searchCustomer = mysql_query("SELECT customer_name FROM users_customers WHERE customer_email='$custEmail'");
        if (mysql_num_rows($searchCustomer) > 0) {
            $getCustomerName = mysql_fetch_array($searchCustomer);
            $passGen = new passwordGen();
            
            $newPassword = $passGen->randomPassword();
            
            mysql_query("UPDATE users_customers SET customer_pass=md5('$newPassword') WHERE customer_email='$custEmail'");
            
            $restoringEmail = new restoreCustomerPassword();
            $restoringEmail->getLoginPass($custEmail, $newPassword, $getCustomerName['customer_name']);
            $restoringEmail->emailMethod();
            
            echo "Готово! Ваш новый пароль отправлен на ваш почтовый ящик: $custEmail";
        } else {
            echo "Пользователь с адресом $custEmail не найден!";
        }
    } else {
        echo "Ошибка! Вы не ввели email!";
    }
}
else
{
    die("Ошибка! Вы ввели неверный проверочный код!");
}
?>
