<html>
<head><title>Lietotāja rīki: SIA IzslauktPlus</title><link rel="stylesheet" type="text/css" href="borrowed_from_w3sch.css"></head>
<body>
<?php
session_start();
echo '<div class="container"><h1>Laipni lūdzam sistēmā, '.$_SESSION['user'].'!</h1>';
?>

<table style="width: 100%"><tr><td>
<label for="mekl_saite">Rīkjosla:</label></td></tr><tr><td bgcolor="#D1F1A2">
<?php
if ($_SESSION['dati']!='') {
	if ($_SESSION['dati']==='1') {
		echo '<a href="https://google.lv" name="mekl_saite">Jūsu ērtībām <i>Google</i> meklētājs</a><br><br>';
		echo '<a href="newquestionary.php" name="jaunformas_saite">Šeit Jūs varat izveidot jaunu aptauju</a><br><br>';
		echo '<a href="visasanketas.php" name="aptaujas_saite">Šeit Jūs varat aizpildīt kādu aptauju</a>';
	}
	else {
		echo '<a href="https://duckduckgo.com" name="mekl_saite">Jūsu ērtībām <i>DuckDuckGo</i> meklētājs</a><br><br>';
		echo '<a href="visasanketas.php" name="aptaujas_saite">Šeit Jūs varat aizpildīt kādu aptauju</a>';
	}
	if (isset($_GET['kuror'])) {
		echo '<br><hr><br>Jūs esat ielogojies sistēmā jau '.$_GET['kuror'].' reizi!';
		if ($_GET['kuror'] > 5) { echo ' Paldies par uzticību!'; }
	}
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
