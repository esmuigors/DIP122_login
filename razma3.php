<?php
session_start();
include 'ifnotuserblank.php';
if ($userlogin == TRUE) {include 'ifnotlogout.php'};
?>
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
	if ($user != "" and $pass != "") {
	$_SESSION['user']=$user;
$_SESSION['pass']=$pass;
include 'onlyuser.php';
if ($userexists == TRUE){
	
	
}
$f1="user.txt";
$ieraksts = file_get_contents($f1);
$ier1=$user." ".$pass." 1";
$ier2=$user." ".$pass." 2";
if (strpos($ieraksts,$ier1)!==false){
	$_SESSION['dati']='1';
	header('Location: razma31.php');
}
else if (strpos($ieraksts,$ier2)!==false){
		$_SESSION['dati']='2';
	header('Location: razma31.php');
}
else echo "Nepareizs lietotajvards vai parole";}
else
	echo 'Ludzu ievadiet vertibas';
}
	

?>
</html>