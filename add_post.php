<?php
session_start();
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "tday";
$prefix = "";
$tbl_name="post"; // Table name 

// Connect to server and select database.
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");


 
//if(isset($_POST['id']))
    {
        $users_id = $_POST['id'];
      
        $query1 = "SELECT * FROM users";
       $result1=mysql_query($query1);
        $red1 = mysql_fetch_array($result1);
		$naslov=$_POST['naslov'];
		$sodrzina=$_POST['sodrzina'];
		if($result1){
		echo "Successful<BR>";
echo "<a href=main_forum.php>View your topic</a>";
}
else {
echo "ERROR";
}
        $query2 = "INSERT INTO post (id, naslov,sodrzina, users_id) VALUES (NULL, '$naslov', '$sodrzina', '$id')";
        $result2 = mysql_query($query2);
		if($result2){
echo "Successful<BR>";
echo "<a href=main_forum.php>View your topic</a>";
}
else {
echo "ERROR";
}
mysql_close();
    
     
    
    
}

?>


 