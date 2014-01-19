<?php
require('config.php');

if(isset($_POST['submit']) ) {

    $email1 = $_POST['email1'];
    $email2 = $_POST['email2'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if($email1 == $email2){
        if($pass1 == $pass2){

		
		 
		$name = mysql_real_escape_string($_POST['name']);
        $lname = mysql_real_escape_string($_POST['lname']);
        $uname = mysql_real_escape_string($_POST['uname']);
        $email1 = mysql_real_escape_string($email1);
        $email2 = mysql_real_escape_string($email2);
        $pass1 = mysql_real_escape_string($pass1);
        $pass2 = mysql_real_escape_string($pass2);
		

        $pass1 = md5($pass1);

        $sql = mysql_query("SELECT * FROM `users` WHERE `uname` = '$uname'");

        if(mysql_num_rows($sql) > 0) {
            echo "Sorry that user already exists.";
            exit();
        }   

        mysql_query("INSERT INTO `users` (`id`,`name`,`lname`,`uname`,`email`,`pass`) VALUES (NULL, '$name','$lname','$uname','$email1','$pass1')") or die(mysql_error());

        echo "Congratulations</br> You Are registering <a href='main_login.php'>NAJAVETE SE!</a>";}
	else{
            echo "Sorry, your passwords do not match.<br />";
            exit();
        }
    }else{
        echo "Sorry, your emails do not match.<br /><br />";
    }


}else{

$form = <<<EOT
<form action= "register.php" method="POST">
First Name: <input type="text" name="name" /><br/>
Last Name: <input type="text" name="lname" /><br/>
Username: <input type="text" name="uname" /><br/>
Email: <input type="text" name="email1" /><br/>
Confirm Email: <input type="text" name="email2" /><br/>
Password: <input type="password" name="pass1" /><br/>
Confirm Password: <input type="password" name="pass2" /><br/>
<input type="submit" value="Register" name="submit"/>
</form>
EOT;

echo $form;



}




?>