<?php
$_SESSION['dati']='';
$sqlq = mysql_query("select usname, ifadmin from authen where usname='".$user."' and passy='".$pass."';");
if ($sqlq) {
  $kasesmu=mysql_fetch_assoc($sqlq);
	$_SESSION['dati']=$kasesmu['ifadmin'];
  $_SESSION['user']=$user;
}
?>
