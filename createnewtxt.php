<?php
do {
$nr = rand(1,700);}
while (file_exists($nr.".txt"));
$myfile = fopen($nr."anketa.txt", "w") ;
$txt = $nr."\n".$title."\n".$pj."\n".$oj."\n".$tj."\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
