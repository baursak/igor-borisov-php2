<?php
//setcookie( "userName", 'John' );
//echo $_COOKIE["userName"];
$user = [
	'name' => 'John',
	'login' => 'root',
	'password' => '1234',
];
$str = serialize($user);
echo base64_encode($str);
?>