<?php



	/**
	 * client access url ==>  using setcookie() ==>
	 *
	 * respose : 	Server: nginx
					Date: Tue, 31 Jul 2018 07:47:53 GMT
					Content-Type: text/html; charset=UTF-8
					Transfer-Encoding: chunked
					Connection: close
					X-Powered-By: PHP/5.6.33
					Set-Cookie: user_name=Guru99; expires=Tue, 31-Jul-2018 07:48:53 GMT; Max-Age=60; path=/
	 *										^
	 *										|
	 *	So, the brower receive this respose | and remember this cookie 
	 */




     setcookie("user_name", "Guru99", time()+ 60,'/'); // expires after 60 seconds
     echo 'the cookie has been set for 60 seconds';
?>
