<?php
$user = 'janis';
$pass = 123;
$cookie_name = 'user';
$cookie_value = $user;
setcookie($cookie_name, $cookie_value); 
$cookie_name1 = 'password';
$cookie_value1 = $pass;
setcookie($cookie_name1, $cookie_value1); 
?>
