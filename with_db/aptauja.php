<html> <head><title>Anketa "
<?php
if (isset($_GET['nos']) { nos=$_GET['nos']; } else { header('Location: visasanketas.php'); }
echo $nos;
?>
"</title><link rel="stylesheet" type="text/css" href="borrowed_from_w3sch.css"></head>
<body>
<div class="container">
<form method="post" style="border:1px solid #ccc"> 
<table border="2">
<tr>
<td>
<?php
(isset($_GET['pj']) ? echo $_GET['pj'] : echo "???";
?>
</td><td>

<input type="text" required="required" name = "r1" /> 
</td>
</tr>
<tr>
<td>
<?php
(isset($_GET['oj']) ? echo $_GET['oj'] : echo "???";
?>
</td><td>

<input type="text" required="required" name = "r2" /> 
</td>
</tr>
<tr>
<td>
<?php
(isset($_GET['tj']) ? echo $_GET['tj'] : echo "???";
?>
</td><td>

<input type="text" required="required" name = "r3" /> 
</td>
</tr>
</table>
<div class="clearfix"><button type="submit" name="galaa" class="signupbtn"><b>Saglabāt atbildes</b></button></div>
</form>

<?php
if ($_SESSION['dati']=='') {
	echo 'Aptauju aizpildīšana ir pieejama tikai reģistrētiem lietotājiem!';
	header('Location: login.php');
} else {
if($_POST['galaa']){
	$r1 = $_POST['r1'] ; 
	$r2 = $_POST['r2'] ; 
	$r3 = $_POST['r3'] ; 
	if ($r1 != "" and $r2!="" and $r3!="") {
include 'addcompletequestionary.php';
}
else
	echo '<h3>Lūdzu, aizpildiet aptauju!</h3>';
}
}
?>
</div></body></html>
