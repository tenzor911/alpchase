<?php
    include ('./classes/login/class.customerLoginSession.php');
    $customerNewSessionForLogin = new customerLoginSession();
    $customerNewSessionForLogin->customerMakesLoginIntoSystem();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">    
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="css/grayhint.css">
            <script type="text/javascript" src="js/jquery/jquery-1.10.2.js"></script>
            <script type="text/javascript" src="js/functions/function_OnlyNumbersField.js"></script>
            <script type="text/javascript" src="js/functions/function_CustomerPasswordRestore.js"></script>
    </head>
    <body>
        <form method="POST" action="customer">
            <table>
                <center><h2>Welcome to private zone!</h2></center>
                <hr>
                <tr><td>Логин </td><td><input type="text" name="email" placeholder="укажите email"/></td></tr>
                <tr><td>Пароль </td><td><input type="password" name="pass" placeholder="укажите пароль"/></td></tr>
                <tr><td>Запомнить вас </td><td><input type="checkbox" checked=""/></td></tr>
            </table>
            <input type="submit" name="login" value="вход в систему" />
        </form>
        <hr>
            <input type="button" style="width:250px;" value="Забыли пароль?" id="restorePassword">    
        <div id="restoringBox" class="restoringBox" hidden>
            <table>
                <tr>
                    <td>
                        <input type="text" style="width:250px;" value="" placeholder="Укажите ваш email" class="emailForRestore" id="emailForRestore">
                    </td>
                </tr>
                <tr>
                    <td>
                        <center><img src="classes/system/class.generateCaptcha.php"></center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" style="width:250px;" value="" placeholder="Введите проверочный код" class="captchaCode" id="captchaCode" disabled>
                    </td>
                </tr>    
                <tr>
                    <td>
                        <input type="button" style="width:250px; color: gray" value="восстановить пароль" class="activateRestore" id="activateRestore">
                    </td>   
                </tr>
            </table>
        </div>      
    </body>
</html>