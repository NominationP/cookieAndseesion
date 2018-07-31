<?php

/**
 * https://www.codeproject.com/Tips/1076176/Login-logout-and-Session-Id-Cookies-in-PHP-for-Beg
 *
 * 
 */


session_start(); //gets session id from cookies, or prepa
// echo date("H:i:s\n");print_r($_SESSION);echo "\n";die();
if (session_id() == '' || !isset($_SESSION['login'])) { //if sid exists and login for sid exists
  
?>

<a href="/intertest/login2/login.php">Login</a>

<?php

} else {
	echo date("H:i:s\n");print_r($_SESSION);echo "\n";die();
echo date("H:i:s\n");print_r(session_id());echo "\n";die();
  echo "Hi, " . $_SESSION['login'];

?>

<a href="/intertest/login2/logout.php">Logout</a>

<?php 

}

?>