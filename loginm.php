<?php
	//Zapocni sesija
	session_start();
	
	//Vklucuvame detali za bazata
	require_once('db.php');
	
	//Niza vo koja se cuvaat greskite pri validacija
	$errmsg_arr = array();
	
	//Znamence za greska pri validacija
	$errflag = false;
	
	//Konektiraj se so serverot
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Unabe to connect with server ' . mysql_error());
	}
	
	//Selektiraj baza
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("No selected database");
	}
	
	//Funkcija za cistenje na korisnickiot vnos vo formata
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Se cistat vrednostite zemeniod formata
	$username = clean($_POST['uname']);
	$password = clean($_POST['pass']);
	
	//Validacija
	if($uname == '') { //Dali ima vneseno korisnicko ime
		$errmsg_arr[] = 'No username';
		$errflag = true;
	}
	if($pass == '') { //Dali ima vneseno lozinka
		$errmsg_arr[] = 'No password';
		$errflag = true;
	}
	
	//Dokolku ima nekoj nepravilen vnos, vrati se na pocetnata strana
	 /* if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr; 
		session_write_close();
		header("location: ne.php"); //Nema potreba da ni pokazuva koi polinja sodrzat pogresni vnesovi, dovolno e da ne vrati na pocetnata
		exit();
	}
	else
	{
	 header("location: da.php");
	}
	*/
	
	
	//Kreiraj query
	$qry="SELECT * FROM `tday`.`users` WHERE uname='$uname' AND pass='".md5($_POST['pass'])."'"; //Lozinkitevo bazata kje gicuvame kodirani so md5
	$result=mysql_query($qry);
	
	//Proveri dali queri-to e izvrseno
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Uspesno logiranje
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['name'];
			$_SESSION['SESS_LAST_NAME'] = $member['lname'];
			$_SESSION['SESS_EMAIL'] = $member['email'];
			session_write_close();
			header("location: da.php");
			exit();
		}else {
			//Neuspesno logiranje
			header("location: ne.html");
			exit();
		}
	}else {
		die("Query failed");
	}
	mysql_close($link);
?>