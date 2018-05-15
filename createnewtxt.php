<?php
do {
$nr = rand(1,7);}
while (file_exists($nr.".txt"));
$myfile = fopen($nr.".txt", "w") ;
$txt = $nr."\n".$title."\n".$pj."\n".$oj."\n".$tj."\n";
fwrite($myfile, $txt);
fclose($myfile);
?>