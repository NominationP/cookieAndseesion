<?php


$username = "yibo";
$password = "123";

$salt = substr (md5($password), 0, 2);
$cookie = base64_encode ("$username:" . md5 ($password, $salt));
setcookie ('my-secret-cookie', $cookie);
echo date("H:i:s\n"	);print_r($_COOKIE);echo "\n";
// and later to re-login user you do:
// 
// 
	header('Location: /');

