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
	<table border="2">
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
	<!--<div class="clearfix"><button type="submit" name="create" class="signupbtn"><b>Izveidot</b></button></div>-->
	<input type="submit" name="create" title="Izveidot"/>
	</form>


<?php
if($_POST['create']){
	echo '123';
	$title = $_POST['title'] ; 
	$pj = $_POST['1j'] ; 
	$oj = $_POST['2j'] ; 
	$tj = $_POST['3j'] ; 
	echo $title.'<br>'.$tj;
	if ($title != "" and $pj != "" and $oj!="" and $tj!="") {
		echo '<h3>ok!</h3>';
		include 'createnewtxt.php';
	}
	else {
		echo '<h3>Lūdzu, ievadiet jautājumus!</h3>';
	}
} else {
	echo '

	';	
}
?>
</div></body></html>
