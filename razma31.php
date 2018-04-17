<?php
session_start(); //aktivizejam sesiju, gribam tai pieslegties
$user = $_SESSION['user'];
$pass = $_SESSION['pass'];
$dati=$_SESSION['dati'];
if ($user!='' and $pass!=''){
	echo '<p>Jusu lietotajvards ir : '.$user.'</p>';
echo '<p>Jusu parole ir : '.$pass.'</p>';
if ($dati=="1"){
	echo"Dodieties uz Google.com";
}
else echo "Dodieties uz Bing.com";
}
else { header('Location: razma3.php');}

?>
<form method = "POST"> 
<input type ="submit" value = "LOG OUT" name ="log" /> 
</form>

<?php
if ($_POST['log']){
	$_SESSION['user']="";
	$_SESSION['pass']="";
	header('Location: razma3.php');
}
?>