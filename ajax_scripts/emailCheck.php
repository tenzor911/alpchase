<?php
include_once '../classes/email/class.verifyEmail.php';

$email = $_POST['email'];
$vmail = new verifyEmail();
if ($vmail->check($email)) {
            echo ''.$email.'email-адрес указан правильно и существует!';
        } elseif ($vmail->isValid($email)) {
            echo ''.$email.'email указан правильно, но скорей всего не существует.';
        } else {
            echo ''.$email.'это не email!';
        }

?>