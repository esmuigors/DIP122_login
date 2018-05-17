<?php
if (isset($_GET['nos'])) {
	$sqlq=mysqli_query("select count(*) from responses");
  $idiks=mysqli_fetch_assoc($sqlq)+1;
  mysqli_free_result($sqlq);
  $sqlq = mysqli_query("insert into responses values (".$idiks.",'".$user."','".$_GET['nos']."','".$_GET['r1']."','".$_GET['r2']."','".$_GET['r3']."')");
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
