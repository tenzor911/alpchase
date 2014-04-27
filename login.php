<?
session_start();

if (isset($_POST['login']))
{
    include('./classes/class_login_secretary.php');
    
    $login = new login_secretary();
    
    if ($login->isLoggedIn())
        header ('location: ./system/navigation.php' );
    else
        $login->showErrors();
}

$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));
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
                <tr><td>Логин </td><td><input type="text" name="username" placeholder="укажите логин"/></td></tr>
                <tr><td>Пароль </td><td><input type="password" name="password" placeholder="укажите пароль"/></td></tr>
                <tr><td>Запомнить вас </td><td><input type="checkbox" checked=""/></td></tr>
            </table>
            <input type="hidden" name="token" value="<?=$token;?>" />
            <input type="submit" name="login" value="вход в систему" />
        </form>
    </body>
</html>
