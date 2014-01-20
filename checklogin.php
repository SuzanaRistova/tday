<?php

ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="tday"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

//username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// encrypt password 
$encrypted_mypassword=md5($mypassword);
$sql="SELECT * FROM users WHERE uname='$myusername' and pass='$encrypted_mypassword'";
$result=mysql_query($sql);


		
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);


/*$query1 = "SELECT * FROM users";
$result1=mysql_query($query1);
$red1=mysql_fetch_row($result1)
 $id = $red1['id'];
 var_dump($id);
 }
 */


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION["myusername"] = $myusername; 
$_SESSION["id"] = $id;
header("location:najaven_user.php");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
?>