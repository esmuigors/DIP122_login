<?php
$jaunsier='';
$ieraksts=file('user.txt'); #,$flags='FILE_IGNORE_NEW_LINES'
( substr_count(implode('',$ieraksts),"\r") == substr_count(implode('',$ieraksts),"\n") ) ? $thisisunix="\r" : $thisisunix='';
foreach ($ieraksts as $noskey => $nosval) {
		$nosavl=explode(' ',$nosval); #echo $nosavl[0].' '.$nosavl[3].' '.strlen(rtrim($nosavl[4])).'<br>'; 
		if ($nosavl[1]==$_SESSION['user']) {
			$nosavl[6]=$nosavl[6]+1;
			$plusss=$nosavl[0].' '.$nosavl[1].' '.$nosavl[2].' '.$nosavl[3].' '.$nosavl[4].' '.$nosavl[5].' '.$nosavl[6].$thisisunix."\n";
		}
		else {
			$plusss=$nosval;
		}
		$jaunsier.=$plusss;
	}
	file_put_contents('user.txt',$jaunsier);
?>
