<?php
include('./setup/mysql_settings.php');

class customerLoginSession
{
    function customerMakesLoginIntoSystem()
    {
        session_start();
        if(isset($_POST['login']))
        {
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
    } 
}
?>