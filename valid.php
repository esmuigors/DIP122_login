<html>
<head><title>Reģistrācijas apstiprināšana</title></head>
<body>
<?php
( isset($_GET['id']) ) ? $marko=$_GET['id'] : header('Location: login.php');
include 'db.php';
$sqlq = mysqli_query($db,"select ifvaled,hasshy from authen where hasshy='".$marko."';");

//while (
if ($row_user = mysqli_fetch_assoc($sqlq)) {
	$temp = $row_user['ifvaled'];
	$t1 = $row_user['usname'];
	echo $temp;
	echo '<br>';
	echo $t1;
	
//){
		if ($temp<1) {
			$sqlq2 = mysqli_query($db,"update authen set ifvaled=1 where hasshy='$marko'");
			if (!$sqlq2) {
				echo "Nevar apstiprināt lietotāju SQL problēmu dēļ: " . mysqli_error($db);
				exit;
			}
			mysqli_free_result($sqlq2);
			echo '<h2>Jauns lietotājs ir veiksmīgi apstiprināts! Tūlīt tiks atvērta pierakstīšanās lapa.</h2>';
		}
		else {
			echo '<h2>Šāds lietotājs jau ir apstiprināts!</h2>';
		}
//		break;
}
else {
	echo '<h2>Šāds apstiprinājuma numurs nav atrasts datubāzē!</h2>';
}
mysqli_free_result($sqlq);
include 'end_db.php';
header('refresh:5;url=login.php');
?>
</body>
</html>
