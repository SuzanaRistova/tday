<?php
session_start();
$id = $_SESSION['myusername'];
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "tday";
$prefix = "";
$tbl_name="post"; // Table name 

// Connect to server and select database.
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");


// get data that sent from form 


$naslov=$_POST['naslov'];
$sodrzina=$_POST['sodrzina'];
$sql="INSERT INTO post(id,naslov, sodrzina,users_id)VALUES(NULL,'$naslov', '$sodrzina',$id)";
$result=mysql_query($sql);

if($result){
echo "Successful<BR>";
echo "<a href=main_forum.php>View your topic</a>";
}
else {
echo "ERROR";
}
mysql_close();
?>