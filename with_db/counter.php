<?php
$jaunsier=''; $kuroreizi='';
$sqlq = mysqli_query($db,"select howoft from authen where usname='".$user."';");
if ($sqlq) {
  $row_user = mysqli_fetch_assoc($sqlq);
  $kuroreizi=$row_user['howoft']+1;
  $sqlq2 = mysqli_query("insert into authen set howoft=".$kuroreizi." where usname='".$user."';");
  mysqli_free_result($sqlq2);
} else {
  echo "Nevarēja atgūt skaitītāja datus!";
}
mysqli_free_result($sqlq);
?>
