<html>
<head><title>Ienākšana sistēmā</title><link rel="stylesheet" type="text/css" href="borrowed_from_w3sch.css"></head>
<body>
<div class="container"><h1>Lūdzu ievadīt autorizācijas datus:</h1>

<form method="post" style="border:1px solid #ccc"> <!--pēc noklusējuma ir GET!-->
<table style="width: 100%"><tr><td><label for="username">Lietotāja vārds:</label> </td><td><input type="text" name="username" placeholder="Ernests Birznieks-Upītis"> </td></tr>
<tr><td><label for="password">Parole:</label> </td><td><input type="password" name="password" placeholder="gbu65s8ci67e"> </td></tr>
</table>
	<div class="clearfix"><button type="submit" name="sendlogin" class="signupbtn"><b>Ienākt sistēmā</b></button> <button type="submit" name="go2signup" class="signupbtn"><b>Reģistrēties</b></button> </div>

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
		include 'ifuserfound.php';
		if ($_SESSION['dati']=='') {
			echo 'Ievadītie reģistrācijas dati ir nepareizi. Lūdzu, mēģiniet vēlreiz!';
		}
		else {
			include 'counter.php';
			//header('refresh:5;url=logout.php?kuror='.$kuroreizi);
			header('Location: logout.php?kuror='.$kuroreizi);
		}
	}
	elseif (isset($_POST['go2signup'])) {
		header('Location: signup.php');
	}
}
include 'end_db.php';
?>
<p style="color:#999">Šī lapa vēl neizmanto sīkdatnes. Lūdzu, turpiniet un nedomājiet par tām!</p>
</div>
</form>
</body>
</html>
