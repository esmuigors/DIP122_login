 <?php
 if (strpos($ieraksts,$user)!==false){echo "Sads lietotajvards jau eksiste";}
else
{{if($pass==$pass1){
	$ier3 = "\r\n".$user." ".$pass." 1";
	$ieraksts1=$ieraksts.$ier3;
	file_put_contents($f1,$ieraksts1);
	//seit aizved uz saiti, kura parada registracijas linku	
}
	else echo"Ievaditas paroles nesakrit";
	
	}};
	?>