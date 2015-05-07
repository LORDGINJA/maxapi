<?php 
	//Configuration for PHP server
	set_time_limit(0);
	ini_set('default_socket_timeout', 300);
	//starts session
	session_start();

	//Make Constants using define
	define('client_ID', '025e77c43f93484fb23e475d3530c15c');
	define('client_Secret', '952be6ecb7d941f89de536e5fdd9d75e');
	define('redirectURI', 'http://localhost/maxapi/index.php');
	define('ImageDirectory', 'pics/');

?>