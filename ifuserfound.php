<?php
$_SESSION['dati']='';
$sqlq = mysqli_query($db,"select usname, ifadmin, ifvaled from authen where usname='".$user."' and passy='".$pass."';");
if ($sqlq) {
  $kasesmu=mysqli_fetch_assoc($sqlq);
  if ($kasesmu['ifvaled']==1) {
  	$_SESSION['dati']=$kasesmu['ifadmin'];
  	$_SESSION['user']=$user;
  } else {
	echo "<h2>Nav saņemts apstiprinājums no lietotāja e-pasta!</h2>";
  }
}
mysqli_free_result($sqlq);
?>
