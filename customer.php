<meta http-equiv="Content-Type" content="text/html; charset=utf8">    
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="css/grayhint.css">
        <script type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
    </head>
    <body>
        <form method="POST" action="customer">
            <table>
                <tr><td>Welcome to private zone!</td></tr>
                <tr><td>Логин </td><td><input type="text" name="email" placeholder="укажите email"/></td></tr>
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

    if(isset($_POST['login'])){

	$uname = $_POST['email'];
        $password = $_POST['pass'];
	$check_user = "SELECT * FROM users_customers WHERE customer_pass=MD5('$password') AND customer_email='$uname'";
	$run = mysql_query($check_user);
	if(mysql_num_rows($run)>0)
        {
            $_SESSION['email']=$uname;
            echo "<script>window.open('./templates/customerzone','_self')</script>";
	}
	else 
        {
            echo "<script>alert('Email or password is incorrect!')</script>";
	}
    }
?>