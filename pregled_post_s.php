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
echo "sodrzina";
    while ($row = @ mysql_fetch_row($result))  {
       
       foreach($row as $data)
          print $data;
		 
       
    }
   
}
	//function for presenting an error in a user-friendly matter if an error occured
	function showerror() {
		die("Error ".mysql_errno()." : ".mysql_error());
	}
	function displayStudents($result) {
		print "<h3>PREGLED NA sodrzaina na site POSTOVI</h3>\n";	//main header
		print 	"\n<table>\n<tr>\n".				//table headers
				"\n\t<th>sodrzina</th>".
				"\n</tr>";
		while ($row = @ mysql_fetch_row($result)) {				//representation done row by row
			print "\n<tr>";
			
			foreach($row as $data)
				print "\n\t<td> {$data} </td>";
			
			print "\n</tr>";
		}
		print "\n</table>\n";
	}
	
	

	$query = "Select sodrzina from post";	//the query
  
	if (!($connection = @ mysql_connect("localhost", "root", "")))	//establishing a connection with the server
		showerror();
	
	if (!(mysql_select_db("tday", $connection)))					//selecting a database
		showerror();
	
	if (!($result = mysql_query($query, $connection)))					//conducting a query on the database
		showerror();
	displayStudents($result);		
		
	mysql_close($connection);											//close the connection
	
  ?>



