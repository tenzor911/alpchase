<?
session_start();

if (isset($_POST['login']))
{
    include('./classes/class_login_secretary.php');
    
    $login = new Login();
    
    if ($login->isLoggedIn())
        echo "Success!";
    else
        $login->showErrors();
}

$token = $_SESSION['secr_token'] = md5(uniqid(mt_rand(), true));
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">    
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="css/grayhint.css">
        <script type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
    </head>
    <body>
        <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
            <table>
                <tr><td>Логин </td><td><input type="text" name="secr_username" placeholder="укажите логин"/></td></tr>
                <tr><td>Пароль </td><td><input type="password" name="secr_password" placeholder="укажите пароль"/></td></tr>
                <tr><td>Запомнить вас </td><td><input type="checkbox" checked=""/></td></tr>
                <tr><td>Выберите вашу страну </td><td><select name="login_country" onchange=""><option value=''>страна не указана</option></select></td></tr>
            </table>
            <input type="hidden" name="secr_token" value="<?=$token;?>" />
            <input type="submit" name="secr_login" value="вход в систему" />
        </form>
    </body>
</html>
