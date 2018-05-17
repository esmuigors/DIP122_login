<html> <head><title>Jaunas anketas izveidošana</title><link rel="stylesheet" type="text/css" href="borrowed_from_w3sch.css"></head>
<body>
<div class="container">
<form method="post" style="border:1px solid #ccc"> 
<table border="2">
<tr><td>
Aptaujas nosaukums:
</td><td>
<input type="text" name = "title" /> 
</tr><tr>
<td>
1.jautajums:
</td><td>

<input type="text" name = "1j" /> 
</td>
</tr>
<tr>
<td>
2.jautajums:
</td><td>

<input type="text" name = "2j" /> 
</td>
</tr>
<tr>
<td>
3.jautajums:
</td><td>

<input type="text" name = "3j" /> 
</td>
</tr>
</table>
<div class="clearfix"><button type="submit" name="create" class="signupbtn"><b>Izveidot</b></button></div>
</form>

<?php
if ($_SESSION['dati']!==1) {
	echo 'Formu radīšana ir pieejama tikai administratoram!';
	header('Location: logout.php');
} else {
if($_POST['create']){
$title = $_POST['title'] ; 
	$pj = $_POST['1j'] ; 
	$oj = $_POST['2j'] ; 
	$tj = $_POST['3j'] ; 
	if ($title != "" and $pj != "" and $oj!="" and $tj!="") {
include 'createnewtxt.php';
}
else
	echo 'Lūdzu, ievadiet jautājumus!';
}
}

?>
</div></body></html>
