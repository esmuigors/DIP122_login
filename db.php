<?php
/* aizvēsturiskais veids ir mysql, tad bija mysqli un vēlāk PDO */
$db = mysqli_connect('localhost','root','330}Nq;YY2pG@c01','System');
if (mysqli_connect_errno())
  {
  echo "Nebija iespējams savienoties ar SQL serveri: " . mysqli_connect_error();
  }

//mysql_select_db('System');
mysqli_set_charset($db,'utf8');
?>
