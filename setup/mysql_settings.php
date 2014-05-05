<?php

    $dbserver="localhost";
    $dbname="root";
    $dbpassword="";
    $dbinstance="alpchase";
    
    mysql_query("SET NAMES 'utf8'");
    mysql_query("SET CHARACTER SET 'utf8'");
    
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
    
