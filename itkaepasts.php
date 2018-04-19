<html>
<head><title>SnailMail: Inbox</title></head>
<body>
<h2>From: IzslauktPlus SIA</h2>
<h2>Subject: Reģistrācija mājaslapā</h2>
<p>Labdien!</p><br>
<p>Paldies par reģistrāciju SIA 'IzlauktPlus' mājaslapā!</p>
<p>Lai pabeigtu reģistrāciju, lūdzu, nospiediet saiti zemāk (vai arī pārkopējiet to savas iecienītās interneta pārlūkprogrammas adrešu joslā):</p>
<br><hr><br><table><tr><td bgcolor="#D1F1A2">
<?php
session_start();
if (isset($_GET['skaties'])) {
	echo '<a href=valid.php?id='.$_GET['skaties'].'>valid.php?id='.$_GET['skaties'].'</a>';
}
else {
	header('Location: signup.php');
}
?>
</td></tr></table><br><hr><br>
<p>Ar cieņu, SIA 'IzslauktPlus'</p>

</body>
</html>