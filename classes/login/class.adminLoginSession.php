<?php
include('./setup/mysql_settings.php');

class adminLoginSession
{
    function adminMakesLoginIntoSystem()
    {
        session_start();
        if(isset($_POST['login']))
        {
            $uname = $_POST['uname'];
            $password = $_POST['pass']; 
            $check_user = mysql_query("SELECT * FROM users_managers WHERE um_login='$uname' AND um_pass=MD5('$password') LIMIT 1");
            //$run = mysql_fetch_array($check_user);
            if(mysql_num_rows($check_user)>0)
            {
                $_SESSION['uname']=$uname;
                echo "<script>window.open('./templates/navigation','_self')</script>";
            }
            else 
            {
                echo "<script>alert('Email or password is incorrect!')</script>";
            }
        } 
    }
}
?>