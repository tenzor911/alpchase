<meta http-equiv="Content-Type" content="text/html; charset=utf8">    
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="css/grayhint.css">
        <script type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
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

<?php
    session_start();

    include('./setup/mysql_settings.php');

    if(isset($_POST['login']))
	{

		$uname = $_POST['uname'];
		$password = $_POST['pass'];
		$check_user = "SELECT * FROM users_managers WHERE um_pass=MD5('$password') AND um_login='$uname'";
		$run = mysql_query($check_user);

		if(mysql_num_rows($run)>0)
		{
			$_SESSION['uname']=$uname;

			echo "<script>window.open('./templates/navigation','_self')</script>";
		}
		else 
        {
            echo "<script>alert('Email or password is incorrect!')</script>";
		}
    }
?>