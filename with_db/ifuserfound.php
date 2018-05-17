<?php
$_SESSION['dati']='';
$sqlq = mysql_query("select usname, ifadmin, ifvaled from authen where usname='".$user."' and passy='".$pass."';");
if ($sqlq) {
  $kasesmu=mysql_fetch_assoc($sqlq);
  if ($kasesmu['ifvaled']==='1') {
  	$_SESSION['dati']=$kasesmu['ifadmin'];
  	$_SESSION['user']=$user;
  } else {
	echo "<h2>Nav saņemts apstiprinājums no lietotāja e-pasta!</h2>";
  }
}
?>
