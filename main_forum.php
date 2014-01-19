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
$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result=mysql_query($sql);
?>

<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Post</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Pregledi</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Odgovori</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

<?php
 
// Start looping table row
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td bgcolor="#FFFFFF"><? echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<? echo $rows['id']; ?>"><? echo $rows['post']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><? echo $rows['pregledi']; ?></td>
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