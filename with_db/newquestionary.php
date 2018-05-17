<html> <head><title>Jaunas anketas izveidošana</title><link rel="stylesheet" type="text/css" href="borrowed_from_w3sch.css"></head>
<body>
<div class="container">
<table border="2">
<tr><td>
<form method="post" style="border:1px solid #ccc"> 
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
<tr> 
<td colspan="2" align ="right">
<input type ="submit" value = "Izveidot" name ="create" /> 
</td>
</tr>
</table>
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
	echo 'Ludzu ievadiet jautajumus';
}
}

?>
</div></body></html>
