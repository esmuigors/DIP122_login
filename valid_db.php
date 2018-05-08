<html>
<head><title>Reģistrācijas apstiprināšana</title></head>
<body>
<?php
# session_start();
( isset($_GET['id']) ) ? $marko=$_GET['id'] : header('Location: login.php');
$jaunsier=''; $vaiier=false; $vai2ier=false;
include 'db.php';
$sqlq = mysql_query("select hasshy, ifvaled from authen;");
$valarr = array();

while ($row_user = mysql_fetch_assoc($sqlq)){
    if ($row_user['hasshy']===$marko) {
		if ($row_user['ifvaled']===0) {
			$sqlq2 = mysql_query("insert into authen set ifvaled=1 where hasshy=".$marko.";");
			if (!$sqlq2) {
				echo "Could not validate user due to DB issues " . mysql_error();
				exit;
			}
		}
		else {
			echo '<h2>Šāds lietotājs jau ir apstiprināts!</h2>';
			$plusss=$nosval;
			$vai2ier=true;
		}
		break;
	}
}
$ieraksts=file('user.txt'); #,$flags='FILE_IGNORE_NEW_LINES'
( substr_count(implode('',$ieraksts),"\r") == substr_count(implode('',$ieraksts),"\n") ) ? $thisisunix="\r" : $thisisunix='';
foreach ($ieraksts as $noskey => $nosval) {
		$nosavl=explode(' ',$nosval); #echo $nosavl[0].' '.$nosavl[3].' '.strlen(rtrim($nosavl[4])).'<br>'; 
		if ($nosavl[3]==$marko AND rtrim($nosavl[4])=='false') {
			$plusss=$nosavl[0].' '.$nosavl[1].' '.$nosavl[2].' '.$nosavl[3].' true '.$nosavl[5].' '.$nosavl[6].$thisisunix."\n";
			$vaiier=true;
			#echo 'ir<br>';
		} elseif ($nosavl[3]==$marko AND rtrim($nosavl[4])=='true') {
			
			#echo 'ir jau<br>';
		} else {
			$plusss=$nosval;
			#echo 'nav<br>';
		}
		$jaunsier.=$plusss;
		if ($vai2ier) break;
	}
	if ($vaiier and ! $vai2ier) {
		file_put_contents('user.txt',$jaunsier);
		echo '<h2>Jauns lietotājs ir veiksmīgi apstiprināts! Tūlīt tiks atvērta pierakstīšanās lapa.</h2>';
	} elseif (! $vai2ier) {
		echo '<h2>Šāds apstiprinājuma numurs nav atrasts datubāzē!</h2>';
	}
	header('refresh:5;url=login.php');
?>
</body>
</html>
