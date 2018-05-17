<html>
<head><title>Reģistrācija sistēmā</title><link rel="stylesheet" type="text/css" href="borrowed_from_w3sch.css"></head>
<body>
<div class="container"><h1>Lūdzu ievadīt reģistrācijas datus:</h1>

<form method="post" style="border:1px solid #ccc"> <!--pēc noklusējuma ir GET!-->
<table style="width: 100%"><tr><td><label for="username">Lietotāja vārds:</label> </td><td><input type="text" name="username" required="required" placeholder="Ernests Birznieks-Upītis"> </td></tr>
<tr><td><label for="password">Parole:</label> </td><td><input type="password" name="password" required="required" placeholder="gbu65s8ci67e"> </td></tr>
<tr><td><label for="password2">Parole vēlreiz:</label> </td><td><input type="password" name="password2" required="required" placeholder="gbu65s8ci67e"> </td></tr></table>
	<div class="clearfix"><button type="submit" name="sendlogin" class="signupbtn"><b>Reģistrēties</b></button></div>

<?php
session_start();
include 'db.php';
include 'ifnotuserblank.php';
if ($userlogin) {
	header('Location: logout.php');
}
else {
	if (isset($_POST['sendlogin'])) {
		$user=$_POST['username'];
		$pass=$_POST['password'];
		$pass2=$_POST['password2'];
		include 'onlyuser.php';
		if ($userexists) {
			echo 'Šāds lietotājs jau ir reģistrējies!';
		}
		else {
			if ($pass === $pass2) {
				include 'register.php';
			}
			else {
				echo 'Ievadītās paroles nesakrīt! Lūdzu, pārbaudiet un ievadiet vēlreiz!';
			}
		}
	}
}
include 'end_db.php';
?>
<p style="color:#999">Šī lapa vēl neizmanto sīkdatnes. Lūdzu, turpiniet un nedomājiet par tām!</p>
</div>
</form>
</body>
</html>
