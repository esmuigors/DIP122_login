<?php
$jaunsier=''; $kuroreizi='';
$sqlq = mysqli_query($db,"select howoft,usname from authen where usname='$user'");
if ($sqlq) {
  $row_user = mysqli_fetch_assoc($sqlq);
  echo $row_user['howoft'].'<br>'.$row_user['usname'];
  $kuroreizi=$row_user['howoft']+1;
  $sqlq2 = mysqli_query($db,"update authen set howoft=$kuroreizi where usname='$user'");
  mysqli_free_result($sqlq2);
} else {
  echo "Nevarēja atgūt skaitītāja datus!";
}
mysqli_free_result($sqlq);
?>
