<?php
session_start();
function session_is_registered($myusername)
{
    if (isset($_SESSION['$myusername']))
    return true;
    else 
    return false;
}
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>