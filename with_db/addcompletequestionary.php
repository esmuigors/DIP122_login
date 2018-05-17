<?php
if (isset($_POST['galaa'])) {
	$sqlq=mysqli_query("select count(*) from responses");
  $idiks=mysqli_fetch_assoc($sqlq)+1;
  mysqli_free_result($sqlq);
  $sqlq = mysqli_query("insert into responses values (".$idiks.",'".$user."','".$_POST['nos']."','".$_POST['r1']."','".$_POST['r2']."','".$_POST['r3']."')");
  if (!$sqlq) {
 	echo "Diemžēl nebija iespējams saglabāt aptaujas rezultātus SQL problēmu dēļ: " . mysql_error();
 	exit;
  }
  mysqli_free_result($sqlq);
}
else {
	header('Location: aptauja.php');
}

?>
