<html>
<head><title>Ienākšana sistēmā</title><link rel="stylesheet" type="text/css" href="borrowed_from_w3sch.css"></head>
<body>
<?php
session_start();
echo '<div class="container"><h1>Laipni lūdzam sistēmā, '.$_SESSION['user'].'!</h1>';
?>

<table style="width: 100%"><tr><td>
<label for="mekl_saite">Rīkjosla:</label></td></tr><tr><td bgcolor="#D1F1A2">
<?php
if ($_SESSION['dati']!='') {
	if ($_SESSION['dati']=='1') {
		echo '<a href="https://google.lv">Jūsu ērtībām <i>Google</i> meklētājs</a>';
	}
	else {
		echo '<a href="https://duckduckgo.com">Jūsu ērtībām <i>DuckDuckGo</i> meklētājs</a>';
	}
	echo 'Jūs esat'];
}
else {
	header('Location: login.php');
}
?>
</td></tr></table>
<form method="post" style="border:0px"> <!--pēc noklusējuma ir GET!-->
<div class="clearfix"><button type="submit" name="loutbtn" class="logoutbtn"><b>Iziet no sistēmas</b></button></div>

<?php
if (isset($_POST['loutbtn'])) {
	echo 'yessssssssss';
	$_SESSION['dati']='';
	session_destroy();
	header('Location: login.php');
}

?>
<p style="color:#999">Šī lapa vēl neizmanto sīkdatnes. Lūdzu, turpiniet un nedomājiet par tām!</p>
</div>
</form>
</body>
</html>
