<html> <head><title>Anketas izvēle</title><link rel="stylesheet" type="text/css" href="borrowed_from_w3sch.css"></head>
<body>
<?php
session_start();
if ($_SESSION['dati']=='') {
	echo '
	<h1>Anketas ir pieejamas tikai reģistrētiem lietotājiem!</h1>
	';
	header('refresh:3;url=login.php');
}
$anketas=scandir(getcwd());
$anketas=array_diff($anketas,[".",".."]);
echo '
	<div class="container" style="overflow-x:auto;">
	<table>';
foreach ($anketas as $taganketa) {
	if (substr($taganketa,-10)=='anketa.txt') {
		$ankedatne=file($taganketa, FILE_IGNORE_NEW_LINES && FILE_SKIP_EMPTY_LINES);
		
		echo '<tr><td>
		<a href="interrogation.php?id='.$ankedatne[0].'">'.$ankedatne[1].'</a>
		</td>
		</tr>';
	}
}

echo '
	</table>';


?>
<br><hr><br><a href="logout.php" name="maju_saite">Atpakaļ uz lietotāja pamatlapu</a>
</div></body></html>
