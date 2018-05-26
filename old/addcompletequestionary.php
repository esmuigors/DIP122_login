<?php
if (isset($_POST['galaa'])) {
	$sqlq=mysqli_query($db,"select count(*) from responses");
  $idiks=mysqli_fetch_assoc($sqlq)+1;
  mysqli_free_result($sqlq);
  $sqlq = mysqli_query($db,"insert into responses values (".$idiks.",'".$user."','".$nos."','".$_POST['r1']."','".$_POST['r2']."','".$_POST['r3']."')");
  if (!$sqlq) {
 	echo "Diemžēl nebija iespējams saglabāt aptaujas rezultātus SQL problēmu dēļ: " . mysqli_error($db);
 	exit;
  }
  mysqli_free_result($sqlq);
}
else {
	header('Location: aptauja.php');
}

?>
