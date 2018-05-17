
<?php
$sqlq = mysqli_query($db,"SELECT usname FROM authen where user='".$user."'");
if ($sqlq) {
  $userexists = TRUE;
} else {
  $userexists = FALSE;
}
mysqli_free_result($sqlq);
?>
