
<?php
$sqlq = mysqli_query($db,"SELECT user FROM authen where user='".$user."'");
if ($sqlq) {
  $userexists = TRUE;
} else {
  $userexists = FALSE;
}
mysqli_free_result($sqlq);
?>
