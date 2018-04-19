<html>
<head><title>Reģistrācija sistēmā</title></head>
<body>
<h1>Lūdzu ievadīt autorizācijas datus:</h1>

<form method="post"> <!--pēc noklusējuma ir GET!-->
<table><tr><td>Lietotāja vārds: </td><td><input type="text" name="username" placeholder="Me"> </td></tr>
<tr><td>Parole: </td><td><input type="password" name="password" placeholder="qwerty"> </td></tr><tr><td>Parole vēlreiz: </td><td><input type="password" name="password2" placeholder="qwerty"> </td></tr></table>
<input type="submit" name="sendlogin" value="Reģistrēties">
</form>

<?php
session_start();
include 'ifnotuserblank.php';
if ($userlogin) {
	header('Location: logout.php');
}
else {
	if (isset($_POST['sendlogin'])) {
		$user=$_POST['username'];
		echo '<br>'.$ier1.'<br>';
		$password=$_POST['password'];
		$password2=$_POST['password2'];
		include 'onlyuser.php';
		if ($userexists) {
			echo 'Šāds lietotājs jau ir reģistrējies!';
		}
		else {
			if ($password === $password2) {
				include 'register.php';
			}
			else {
				echo 'Ievadītās paroles nesakrīt! Lūdzu, pārbaudiet un ievadiet vēlreiz!';
			}
		}
	}
}

?>
<p style="color:#999">Šī lapa vēl neizmanto sīkdatnes. Lūdzu, turpiniet un nedomājiet par tām!</p>
</body>
</html>