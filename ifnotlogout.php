<?php

	$f1="user.txt";
$ieraksts = file_get_contents($f1);
	$user = $_SESSION['user'] ; 
	$pass = $_SESSION['pass'] ; 
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

?>