<html>
<head><title>Reģistrācijas apstiprināšana</title></head>
<body>
<?php
# session_start();
( isset($_GET['id']) ) ? $marko=$_GET['id'] : header('Location: login.php');
$jaunsier=''; $vaiier=false; $vai2ier=false;
include 'db.php';
$sqlq = mysql_query("select hasshy, ifvaled from authen where hasshy='".$marko."';");
$valarr = array(); $vaiier = 'false'; $vai2ier = 'false';

while ($row_user = mysql_fetch_assoc($sqlq)){
    if ($row_user['hasshy']===$marko) {
		if ($row_user['ifvaled']===0) {
			$sqlq2 = mysql_query("insert into authen set ifvaled=1 where hasshy='".$marko."';");
			if (!$sqlq2) {
				echo "Could not validate user due to DB issues " . mysql_error();
				exit;
			}
			echo '<h2>Jauns lietotājs ir veiksmīgi apstiprināts! Tūlīt tiks atvērta pierakstīšanās lapa.</h2>';
			$vaiier=true;
		}
		else {
			echo '<h2>Šāds lietotājs jau ir apstiprināts!</h2>';
			$plusss=$nosval;
			$vai2ier=true;
		}
		break;
	}
}
if (not ($vaiier or $vai2ier)) {
	echo '<h2>Šāds apstiprinājuma numurs nav atrasts datubāzē!</h2>';
}
mysqli_free_result($sqlq);
include 'end_db.php';
header('refresh:5;url=login.php');
?>
</body>
</html>
