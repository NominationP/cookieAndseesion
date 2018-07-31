<?php

/**
 * https://stackoverflow.com/questions/17493655/php-login-session-and-cookie?utm_medium=organic&utm_source=google_rich_qa&utm_campaign=google_rich_qa
 * 
 */


$username = "yibo";
$password = "123";


// $salt = substr (md5($password), 0, 2);
// $cookie = base64_encode ("$username:" . md5 ($password, $salt));
// setcookie ('my-secret-cookie', $cookie);
// echo date("H:i:s\n"	);print_r($_COOKIE);echo "\n";die();
// and later to re-login user you do:

$cookie = $_COOKIE['my-secret-cookie'];
$content = base64_decode ($cookie);


list($username, $hashed_password) = explode (':', $content);

// here you need to fetch real password from database based on username. ($password)
if (md5($password, substr(md5($password), 0, 2)) == $hashed_password) {
    // you can consider use as logged in
    // do whatever you want :)
    echo "welcome!";
}else{
	echo "login-->";

}
