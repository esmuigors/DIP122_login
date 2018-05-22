
<?php
$sqlq = mysqli_query($db,"SELECT usname FROM authen where user='$user'");
if ($sqlq) {
  $sqlr =  mysqli_fetch_assoc($sqlq); echo $sqlr['usname'];
  $userexists = TRUE;
} else {
  $sqlr =  mysqli_fetch_assoc($sqlq); echo $sqlr['usname'];
  $userexists = FALSE;
}
?>
