<?php
    session_start();
    
    if ($_SERVER['SERVER_NAME']=='tday.dev') {
        $mysql_password = "toor";
    } else {
        $mysql_password = "";
    }
    $mysql_hostname = "localhost";
    $mysql_user = "root";

    $mysql_database = "tday";
    $prefix = "";
    $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
    mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>