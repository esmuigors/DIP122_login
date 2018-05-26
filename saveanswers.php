
<?php
$sqlq2=mysqli_query($db,"select count(ID) as numid from responses");
if (!$sqlq2) {
 				echo "Nevar saskaitīt ierakstus SQL problēmu dēļ: " . mysqli_error($db);
 				exit;
}
$iddy=mysqli_fetch_assoc($sqlq2);
$oddy=$iddy['numid']+1;
$username=$_SESSION['user'];
$sqlq2 = mysqli_query($db,"insert into responses (ID,username,pollname,resp1,resp2,resp3) values ( $oddy ,'$username','$title','$pj','$oj','$tj')");
if (!$sqlq2) {
 	echo "Nevar saglabāt atbildi SQL problēmu dēļ: " . mysqli_error($db);
 	exit;
} else {
	mysqli_free_result($sqlq2);
	echo '<br><h3>Aptaujas rezultāti ir saglabāti!<br>Paldies par veltīto laiku!<!</h3>';
	header('refresh:5;url=visasanketas.php');
}
?>
