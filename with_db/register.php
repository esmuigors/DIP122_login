
<?php
$haashy=substr(md5(rand()), 0, 16); # © tasmaniski@SO.com
$sqlq2 = mysqli_query($db,"insert into authen values ('".$user."','".$pass."',0,'".$haashy."',0,0,0)");
if (!$sqlq2) {
 				echo "Nevar reģistrēt lietotāju SQL problēmu dēļ: " . mysqli_error();
 				exit;
}
else {
     mysqli_free_result($sqlq2);
}
echo '<h2>Jauns lietotājs ir veiksmīgi reģistrēts! Lūdzu pārbaudīt savu e-pasta kontu (patiesībā tūlīt atvērsies lapa ar saiti).</h2>';
header('refresh:5;url=itkaepasts.php?skaties='.$haashy);
?>
