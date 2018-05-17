<html>
<head><title>Reģistrācijas apstiprināšana</title></head>
<body>
<?php
( isset($_GET['id']) ) ? $marko=$_GET['id'] : header('Location: login.php');
include 'db.php';
$sqlq = mysqli_query($db,"select hasshy, ifvaled from authen where hasshy='".$marko."';");

//while (
if ($row_user = mysqli_fetch_assoc($sqlq)) {
//){
		if ($row_user['ifvaled']===0) {
			$sqlq2 = mysqli_query("insert into authen set ifvaled=1 where hasshy='".$marko."';");
			if (!$sqlq2) {
				echo "Nevar apstiprināt lietotāju SQL problēmu dēļ: " . mysql_error();
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
