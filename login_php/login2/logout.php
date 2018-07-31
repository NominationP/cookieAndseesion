<?php

session_start();
echo date("H:i:s\n");print_r($_SESSION);echo "\n";die();
echo date("H:i:s\n");print_r(session_id());echo "\n";die();

setcookie(session_name(), "", time() - 36000); //send browser command remove sid from cookie
session_destroy(); //remove sid-login from server storage
session_write_close();
header('Location: /');

?>