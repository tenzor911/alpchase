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
            $check_user = "SELECT * FROM users_managers WHERE um_pass=MD5('$password') AND um_login='$uname' LIMIT 1";
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
    }
}
?>