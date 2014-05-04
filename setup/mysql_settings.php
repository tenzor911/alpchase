<?php

    $dbserver="localhost";
    $dbname="root";
    $dbpassword="";
    $dbinstance="alpchase";
    
    if (mysql_connect($dbserver, $dbname, $dbpassword)) 
    {
 
    } 
    else 
    {
        echo "DB server auth: Error! Something is wrong!";
    }

    if (!mysql_select_db($dbinstance)) 
    {
        die("DB conection: Error! Database doesn't exist!");
    }
    
