<?php 
	//Configuration for PHP server
	set_time_limit(0);
	ini_set('default_socket_timeout', 300);
	//starts session
	session_start();

	//Make Constants using define
	define('clientID', '025e77c43f93484fb23e475d3530c15c');
	define('clientSecret', '952be6ecb7d941f89de536e5fdd9d75e');
	define('redirectURI', 'http://localhost/maxapi/index.php');
	define('ImageDirectory', 'pics/');


	if (isset($_GET['code'])) {
		$code = ($_GET['code']);
		$url = 'https://api.instagram.com/oauth/access_token';
		$access_token_settings = array('client_id' => clientID,
									   	'client_secret' => clientSecret,
										'grant_type' => 'authorization_code',
										'redirect_uri' => redirectURI, 
										'code' => $code);

		//cURL is a library that calls to other API's
		//setting curl session and insert $url
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_POST, true);
		//sets the POSTFIELDS to the array
		curl_setopt($curl, CURLOPT_POSTFIELDS, $access_token_settings);
		//sets equal to 1
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		//verifies that the curl is really there
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

		//stores above information
		$result = curl_exec($curl);
		curl_close();
		//decodes information in $result
		$results = json_decode($result, true);
		//echoes the decoded information 
		echo $results['user']['username'];
	}

	else{

	}
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- <meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width098, intitial-scale = 1"> -->
		<title>InstApi</title>
		<!-- <meta rel="stylesheet" href="css/style.css">
		<meta rel="author" href="humans.txt"> -->
	</head>
	<body>
		<!-- Creating a login for people to go and give approval for our web app to access their Instagram Account
			 After getting aprroval we are now going to have the information so that we can play with it.
		 -->
		<a href="https://api.instagram.com/oauth/authorize/?client_id = <?php echo clientID; ?> & redirect_uri = <?php echo redirectURI; ?> & response_type=code">LOGIN</a>
		<script src="js/main.js"></script>
	</body>
</html>