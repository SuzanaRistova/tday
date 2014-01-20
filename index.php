<?php
    require 'config.php';
    require 'header.php';
?>

<h1 style="color: green">Здраво душичке!</h1><br /><br />
Ovaa ti e pocetna strana, od tuka pocni i planiraj si da ima linkovi so kje vodat do site skripti.<br />
Primer logicno e da ima link do login i register i slicno. Primer: <br />
<a href="main_login.php">Најава</a><br />
<a href="register.php">Регистрација</a>
<br />

<br />
Sekogas povikuvaj ja na pocetok na sekoa skripta config.php, a ako ima html u taa skripta kje gi povikuvas
i header.php na pocetok i footer.php na kraj kako tuka.

<br />
session_start e vmetnano u config.php taka da samo vklucuvaj go vaj fajl i kje nema potreba pa da ja definiras.
<br />
Dodadeh i u config.php eden if za da moze i jas da se povrzuvam bez da menam lozinka za baza (kaj mene ima lozinka mysql-o "toor")
<br />

Sesiite se vaka:
$_SESSION['username'] e korisnicko ime na najaven korisnik;
$_SESSION['users_id'] e id na najavenio user. koristes gi SEKADE deka so ti treba
<br />
<br />
Epa sea ti si na red. <b style="color: red; font-size: 20px">Cheers!</b>


<br /><br />
<a href="create_post.php">Додај нов пост</a>


<?php require 'footer.php'; ?>

<?php
//var_dump($_SESSION);
//exit();

?>