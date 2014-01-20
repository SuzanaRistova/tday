
<?php
require_once('najaven_user.php');


echo "<h5 align='right'> ZDRAVO, NAJAVENI STE</h5> </br>";
echo "<h5 align='right'> <a href='Logout.php'> ODJAVETE SE!</a> </h5>";
//$kor=$_POST['id'];
//echo"$kor";
echo "<h5 align='center'>  <a href='vnes_tema.php'> VNESETE TEMA </a></h5> </br> </BR>";
echo " <h5 align='center'>  <a href='create_post.php'> KREIRAJ POST </a> </h5> </br>";
require_once('pregled_post.php');
//Moze da dodava tema
//include('vnes_tema.php');
//Moze da dodava post
//include('create_post.php');
?>