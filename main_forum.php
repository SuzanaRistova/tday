


<?php


$hostname='localhost';
$username='root';
$password='';
$dbname='tday';

//Nice output if an error occurs during the interaction with the DBMS
function dberror() {  
	die("DB Error " . mysql_errno() . " : " . mysql_error());
}

function mysqlclean($input, $maxlength, $connection){
	$input = substr($input, 0, $maxlength);
	$input = mysql_real_escape_string($input, $connection);
	return $input;
}

//Displays the results in a HTML table from a given result set (specialzed for the Student table)
function displayResults($result)  {	
echo "naslov";

	
    // header
	


    // results
    while ($row = @ mysql_fetch_row($result))  {
       
       foreach($row as $data)
          print $data;
		 
       
    }
   
}

?>
<?php
	//function for presenting an error in a user-friendly matter if an error occured
	function showerror() {
		die("Error ".mysql_errno()." : ".mysql_error());
	}
	function displayStudents($result){
	while ($row = @ mysql_fetch_row($result)) {	
	foreach($row as $data)
	print $data;
	}
	}
	$query = "Select naslov from post  ";	//the query
  
	if (!($connection = @ mysql_connect("localhost", "root", "")))	//establishing a connection with the server
		showerror();
	
	if (!(mysql_select_db("tday", $connection)))					//selecting a database
		showerror();
	
	if (!($result = mysql_query($query, $connection)))					//conducting a query on the database
		showerror();
	
	displayStudents($result);											//calling a function for displaying the results of the query
	
	mysql_close($connection);											//close the connection
	
  ?>
<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "tday";
$prefix = "";
$tbl_name="post"; // Table name 

 

// Connect to server and select databse.
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
$sql="SELECT naslov FROM post ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result=mysql_query($sql);
?>

<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Post</strong></td>
</tr>

<?php
 
// Start looping table row
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td bgcolor="#FFFFFF"><? echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<? echo $rows['id']; ?>"><? echo $rows['post']; ?></a><BR></td>
</tr>

<?php
// Exit looping and close connection 
}
mysql_close();
?>

<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="create_post.php"><strong>Kreiraj nov post</strong> </a></td>
</tr>
</table>