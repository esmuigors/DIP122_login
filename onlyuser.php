<?php
$f1="user.txt";
$ieraksts = file_get_contents($f1);
 if (strpos($ieraksts,$user)!==false){
	 $userexists = TRUE;
 } else $userexists = FALSE;
 
 ?>