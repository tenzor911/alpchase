<meta http-equiv="Content-Type" content="text/html; charset=utf8">    
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="css/grayhint.css">
        <script type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
    </head>
    <body>
        <form method="POST" action="registration.php">
            <table width="300" border="5" align="center">
                <tr>
                    <td colspan="5"><h1>Registration Form</h1></td>
                </tr>
                <tr>
                    <td align="center">user login:</td>
                    <td><input type="text" name="name" /></td>
                </tr>
                <tr>
                    <td align="center">user password:</td>
                    <td><input type="password" name="pass" /></td>
                </tr>
                <tr>
                    <td align="center">user email:</td>
                    <td><input type="text" name="email" /></td>
                </tr>
                <tr>
                    <td align="center">user role:</td>
                    <td><select name="roles"><option value="admin">admin</option><option value="user">user</option></select></td>
                </tr>
                <tr>
                    <td colspan='5' align='center'><input type="submit" name="submit" value="register new user" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php

    include('./setup/mysql_settings.php');
    
    if(isset($_POST['submit'])) 
    {
        $reg_user_name  = filter_input(INPUT_POST, 'name');
        $reg_user_pass  = filter_input(INPUT_POST, 'pass');
        $reg_user_email = filter_input(INPUT_POST, 'email');
        $reg_user_role  = filter_input(INPUT_POST, 'roles');
        
        if($reg_user_name=='')
        {
            echo "<script>alert('Username is empty!')</script>"; 
            exit();
        }
        
        if($reg_user_pass=='')
        {
            echo "<script>alert('Password is empty!')</script>"; 
            exit();
        }
        
        if($reg_user_email=='')
        {
            echo "<script>alert('Email is empty!')</script>"; 
            exit();
        } 
        
        $check_email = "SELECT * FROM users_managers WHERE um_email='".$reg_user_email."'";
	
	$run = mysql_query($check_email);
	
	if(mysql_num_rows($run)>0){
            echo "<script>alert('Email $reg_user_email is already exist in our database, plz try another one!')</script>";
            exit();
	}
	
	$query = "INSERT INTO users_managers (um_login, um_pass, um_email, um_role) VALUES ('$reg_user_name', MD5('$reg_user_pass'), '$reg_user_email', '$reg_user_role')";
	
        if(mysql_query($query)){
            echo "<script>alert('Success!')</script>";
        }
    }
?>
