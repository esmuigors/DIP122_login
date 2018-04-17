<?php
$f1="user.txt";
$ieraksts = file_get_contents($f1);
if (strpos($ieraksts,$ier1)!==false){
	echo "Sads lietotajs jau eksiste";
}
else if (strpos($ieraksts,$ier2)!==false){
		echo "Sads lietotajs jau eksiste";
}
?>