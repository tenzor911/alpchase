<?php
    include ('./classes/login/class.adminLoginSession.php');
    $adminNewSessionForLogin = new adminLoginSession();
    $adminNewSessionForLogin->adminMakesLoginIntoSystem();
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf8">    
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="css/grayhint.css">
            <script type="text/javascript" src="js/jquery/jquery-1.10.2.js"></script>
    </head>
    <body>
        <form method="POST" action="index">
            <table>
                <tr><td>Логин </td><td><input type="text" name="uname" placeholder="укажите логин"/></td></tr>
                <tr><td>Пароль </td><td><input type="password" name="pass" placeholder="укажите пароль"/></td></tr>
                <tr><td>Запомнить вас </td><td><input type="checkbox" checked=""/></td></tr>
            </table>
            <input type="submit" name="login" value="вход в систему" />
        </form>
    </body>
</html>
     <script>
         /*
            $(".email").change(function() {
                var emailToRestore = $(this).val();
                $.post( 
                    "ajax_scripts/emailCheck.php",
                    {   
                        email: emailToRestore,
                        dataType: "json"
                    },
                    function(success) {
                        $('#emailexist').text(success);
                    }
                );
            });*/
        </script>