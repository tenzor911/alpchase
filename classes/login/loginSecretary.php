<?php
class loginSecretary 
{
    function userLoggedIn() 
    {
        if (isset($_SESSION['uname']) || isset($_COOKIE['uname']))
        {
            $isLoggedIn = TRUE;
            return $isLoggedIn;
        }
    }
}
?>
