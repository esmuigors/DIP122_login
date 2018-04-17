<html> 
<table border="2">
<tr><td>
<form method = "POST"> 
Lietotajvards:
</td><td>
<input type="text" name = "user" /> 
</tr><tr>
<td>
Parole:
</td><td>

<input type="password" name = "pass" /> 
</td>
</tr>
<tr>
<td>
Atkartojiet Paroli:
</td><td>

<input type="password" name = "pass1" /> 
</td>
</tr>
<tr> 
<td colspan="2" align ="right">
<input type ="submit" value = "LOG IN" name ="log" /> 
</td>
</tr>
</table>
</form>

<?php
if($_POST['log']){
$user = $_POST['user'] ; 
	$pass = $_POST['pass'] ; 
	$pass1 = $_POST['pass1'] ; 
	if ($user != "" and $pass != "" and $pass1!="") {
	$_SESSION['user']=$user;
$_SESSION['pass']=$pass;
$_SESSION['pass1']=$pass1;
$ier1=$user." ".$pass." 1";
$ier2=.$user." ".$pass." 2";
include 'ifexists.php';
include 'ifexistsuser.php';}
else
	echo 'Ludzu ievadiet vertibas';
}
	

?>
</html>