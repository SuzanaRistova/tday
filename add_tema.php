<?php
	
	//Vkluci gi detalite za konekcija do bazata
	require_once('db.php');

	
	
	
	//Konektiraj se do serverot
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Unable to connect with server: ' . mysql_error());
	}
	
	//Selektiraj baza
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	/*
	
	
	//Validacija
	if($ime == '') { //Validacija dali e vneseno ime
		$errmsg_arr[] = '<i>No First name</i>';
		$errflag = true;
	}
	else if(preg_match("/[^A-Za-z]/", $ime)){ //Imeto moze da sodrzi samo bukvi
		$errmsg_arr[] = '<i>Your First name should be just a letters</i>';
		$errflag = true;
	}
	
	if($prezime == '') {//Poleto mora da bide popolneto
		$errmsg_arr[] = '<i>No Last name</i>';
		$errflag = true;
	}
	else if(preg_match("/[^A-Za-z]/", $prezime)){
		$errmsg_arr[] = '<i>Your Last name should be just a letters</i>';
		$errflag = true;
	}
	
	if($username == '') {
		$errmsg_arr[] = '<i>No username</i>';
		$errflag = true;
	}
	else if(preg_match("/[^0-9A-Za-z\._]/", $username)){ //Korisnickoto ime moze da sodrzi bukvi, brojki, tocka i dolna crta
		$errmsg_arr[] = '<i>Username should be just numbers, letters and _</i>';
		$errflag = true;
	}
	else if(strlen($username)>20){ //Dolzinata na korisnickoto ime ne smee dabide podolga od 20 karakteri
		$errmsg_arr[] = '<i>Username should be less then 20 charracters</i>';
		$errflag = true; 
	}
	
	if($password == '') {
		$errmsg_arr[] = '<i>No password</i>';
		$errflag = true;
	}
	else if(strlen($password)<6){ //Lozinkata ne smee da bide pomalku od 6 znaci
		$errmsg_arr[] = '<i>Password should be atleast 6 charracters</i>';
		$errflag = true;
	}
	
	if($cpassword == '') {
		$errmsg_arr[] = '<i>No retype password</i>';
		$errflag = true;
	}
	
	if($k_godina == '') {
		$errmsg_arr[] = '<i>No year of birth</i>';
		$errflag = true;
	}
	else if(strlen($k_godina)<>4){ //Godinata mora da ima 4 znaci
		$errmsg_arr[] = '<i><Wrong year</i>';
		$errflag = true;
	}
	else if(preg_match("/[^0-9]/", $k_godina)){ //Godinata mora da e sostavena samo od bukvi
		$errmsg_arr[] = '<i>Wrong input for Year of birth. Please input in format (yyyy)</i>';
		$errflag = true;
	}
	else if($k_godina<1900){ //Korisnikot sigurno ne e tolku star
		$errmsg_arr[] = '<i>Not possible to be alive with this years. Try again</i>';
		$errflag = true;
	}
	else if($k_godina>date("Y")){ //Ne e mozno da bide roden posle tekovnata godina
		$errmsg_arr[] = '<i>You are not born if this is true. Wrong input parameters.</i>';
		$errflag = true;
	}
	
	if($k_adresa == '') {
		$errmsg_arr[] = '<i>No adress</i>';
		$errflag = true;
	}
	
	if($e_mail == '') {
		$errmsg_arr[] = '<i>No e-mail</i>';
		$errflag = true;
	}
	else if(!preg_match('/^[a-zA-Z0-9\._]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/', $e_mail)){ //Validacija na e-mail
		$errmsg_arr[] = '<i>Invalid e-mail</i>';
		$errflag = true;
	}
	
	if($omilen_zanr == '') {
		$errmsg_arr[] = '<i>No favoure genre</i>';
		$errflag = true;
	}
	if( strcmp($password, $cpassword) != 0 ) { //Lozinkata i kontrolnata lozinka mora da bidat isti,
		$errmsg_arr[] = '<i>Password not match</i>'; // bidejki bez kontrolnata lozinka mozno e korisnikot da vnel neposakuvan parametar
		$errflag = true;
	}
	
	*/
//Sekoe korisnicko ime mora da bide edinstveno, ne smee da se povtoruvaat isti korisnicki iminja
	/*if($username != '') {
		$qry = "SELECT * FROM korisnici WHERE username='$username'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = '<i>Username already in use. Input other username</i>';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	*/
	
	
	//Ako ima nekoi greski, vrati na formata za registracija
	/*if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: registracija1-forma.php");
		exit();
	}
	*/
	/*$ime=$_POST['ime'];
	$prezime=$_POST['prezime'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	*/
	$naslov=$_POST['naslov']; 
	
	//mysql_query("LOCK TABLES baza.korisnici WRITE;");//Kje gi zaklucime site tabeli kade sto imame vmetnuvanje ili update, iako sekade bas ne mora
	//Upit za vnesuvanje na parametrite vo bazata
	
	$qry = "INSERT INTO tema VALUES(NULL,'$naslov')";
	$result = @mysql_query($qry);
	//mysql_query("UNLOCK TABLES;");
	
	//Proverka dali upitot e uspesno izvrsen
	if($result) {
		header("location:tema_dodadena.php");
		exit();
	}else {
		die("Query failed");
	}
	mysql_close($link);
?>