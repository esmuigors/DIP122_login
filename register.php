<?php
# session_start();
$jaunsier=''; $vaiier=false; $vai2ier=false;
$ieraksts=file_get_contents('user.txt'); #,$flags='FILE_IGNORE_NEW_LINES'
( substr_count($ieraksts,"\r") == substr_count($ieraksts,"\n") ) ? $thisisunix="\r" : $thisisunix='';
$haashy=substr(md5(rand()), 0, 16); # © tasmaniski@SO.com
$papier=$user.' '.$pass.' 1 '.$haashy.' false false 0'.$thisisunix."\n";
$ieraksts.=$papier;
file_put_contents('user.txt',$ieraksts);
echo '<h2>Jauns lietotājs ir veiksmīgi apstiprināts! Lūdzu pārbaudīt savu e-pasta kontu (patiesībā tūlīt atvērsies lapa ar saiti).</h2>';
header('refresh:5;url=itkaepasts.php?skaties='.$haashy);
?>
