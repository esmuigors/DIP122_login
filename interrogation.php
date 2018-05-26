<html> <head><title>Anketas aizpildīšana</title><link rel="stylesheet" type="text/css" href="borrowed_from_w3sch.css"></head>
<body>
<?php
session_start();
if ($_SESSION['dati']=='') {
	echo '
	<h1>Formu radīšana ir pieejama tikai reģistrētiem lietotājiem!</h1>
	';
	header('refresh:3;url=login.php');
}
$ankedatne=file($_GET['id'].'anketa.txt', FILE_IGNORE_NEW_LINES && FILE_SKIP_EMPTY_LINES);

echo '
	<div class="container">
	<form method="post" style="border:1px solid #ccc"> 
	<div style="overflow-x:auto;">
	<table>
	<tr><td>
	'.$ankedatne[1].'
	</td>
	</tr><tr>
	<td>
	'.$ankedatne[2].'
	</td><td>

	<input type="text" required="required" name = "1j" /> 
	</td>
	</tr>
	<tr>
	<td>
	'.$ankedatne[3].'
	</td><td>

	<input type="text" required="required" name = "2j" /> 
	</td>
	</tr>
	<tr>
	<td>
	'.$ankedatne[4].'
	</td><td>

	<input type="text" required="required" name="3j"/> 
	</td>
	</tr>
	</table>
	</div> <!--of table-->
	<div class="clearfix"><button type="submit" name="answerq" class="signupbtn"><b>Saglabāt atbildes</b></button></div>
	</form>';

if(isset($_POST['answerq'])){
	$title = $ankedatne[1] ;
	$pj = $_POST['1j'] ; 
	$oj = $_POST['2j'] ; 
	$tj = $_POST['3j'] ; 
	if ($title != "" and $pj != "" and $oj!="" and $tj!="") {
		include 'db.php';
		include 'saveanswers.php';
		include 'end_db.php';
	}
	else {
		echo '<br><div class="text-center"><h3>Lūdzu, ievadiet atbildes!</h3></div>';
	}
} else {
	echo '

	';	
}
?>
<br><hr><br><a href="logout.php" name="maju_saite">Atpakaļ uz lietotāja pamatlapu</a>
</div></body></html>
