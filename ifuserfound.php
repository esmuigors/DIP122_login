<?php
$f1="user.txt";
$ieraksts = file_get_contents($f1);
$ier1=$user." ".$pass." 1";
$ier2=$user." ".$pass." 2";
$_SESSION['dati']='';
if (strpos($ieraksts,$ier1)!==false){
	$_SESSION['dati']='1';
	$_SESSION['user']=$user;
}
else if (strpos($ieraksts,$ier2)!==false){
	$_SESSION['dati']='2';
	$_SESSION['user']=$user;
}
?>
