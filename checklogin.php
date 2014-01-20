<?php
    require 'config.php';

    //username and password sent from form 
    $myusername = $_POST['myusername'];
    $mypassword = $_POST['mypassword'];

    // encrypt password 
    $encrypted_mypassword = md5($mypassword);
    $sql = "SELECT * FROM users WHERE uname='$myusername' and pass='$encrypted_mypassword'";
    $result = mysql_query($sql);

    // If result matched $myusername and $mypassword, table row must be 1 row
    if (mysql_num_rows($result) == 1) {
        $resultsFetched = mysql_fetch_array($result);

    // Register $myusername, $mypassword and redirect to file "login_success.php"
        $_SESSION["username"] = $resultsFetched['uname'];
        $_SESSION["users_id"] = $resultsFetched['id'];
        
        header("location:najaven_user.php");
    } else {
        echo "Wrong Username or Password";
    }
?>