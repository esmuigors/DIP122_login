<html> <head><title>Jaunas anketas izveidošana</title><link rel="stylesheet" type="text/css" href="borrowed_from_w3sch.css"></head>
<body>
<?php
session_start();
if ($_SESSION['dati']!=='1') {
	echo '
	<h1>Formu radīšana ir pieejama tikai administratoram!</h1>
	';
	header('refresh:5;url=logout.php');
}
?>
	<div class="container">
	<form method="post" style="border:1px solid #ccc"> 
	<div style="overflow-x:auto;">
	<table>
	<tr><td>
	Aptaujas nosaukums:
	</td><td>
	<input type="text" required="required" name = "title" /> 
	</tr><tr>
	<td>
	1.jautajums:
	</td><td>

	<input type="text" required="required" name = "1j" /> 
	</td>
	</tr>
	<tr>
	<td>
	2.jautajums:
	</td><td>

	<input type="text" required="required" name = "2j" /> 
	</td>
	</tr>
	<tr>
	<td>
	3.jautajums:
	</td><td>

	<input type="text" required="required" name="3j"/> 
	</td>
	</tr>
	</table>
	</div> <!--of table-->
	<div class="clearfix"><button type="submit" name="createq" class="signupbtn"><b>Izveidot</b></button></div>
	<!--<input type="submit" name="create" title="Izveidot"/>-->
	</form>


<?php
if(isset($_POST['createq'])){
	$title = $_POST['title'] ; 
	$pj = $_POST['1j'] ; 
	$oj = $_POST['2j'] ; 
	$tj = $_POST['3j'] ; 
	if ($title != "" and $pj != "" and $oj!="" and $tj!="") {
		include 'createnewtxt.php';
		echo '<br><h3>Jauna aptauja ir veiksmīgi izveidota!</h3>';
	}
	else {
		echo '<br><div class="text-center"><h3>Lūdzu, ievadiet jautājumus!</h3></div>';
	}
} else {
	echo '

	';	
}
?>
<br><hr><br><a href="logout.php" name="maju_saite">Atpakaļ uz lietotāja pamatlapu</a>
</div></body></html>
