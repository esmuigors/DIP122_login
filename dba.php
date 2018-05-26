<?php
/* aizvēsturiskais veids ir mysql, tad bija mysqli un vēlāk PDO */
/* System ir datubāzes nosaukums */
$db = mysqli_connect('localhost','root','','System');
if (mysqli_connect_errno())
  {
  echo "Nebija iespējams savienoties ar SQL serveri: " . mysqli_connect_error();
  }

//mysql_select_db('System');
mysqli_set_charset($db,'utf8');
?>
