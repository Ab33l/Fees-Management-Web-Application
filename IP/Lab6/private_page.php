<?php

	session_start();

	include_once 'user.php';
	
	if (!isset($_SESSION['username'])) {
		header("Location:login.php");
	}

	function fetchUserApiKey() {
		$apis_read = User::create();
		$api = $apis_read->readUserApiKey($_SESSION['id']);

		return $api;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Private Page</title>
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="validate.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

	<script type="text/javascript" src="bootstrap.min.js"></script>
	
	<script type="text/javascript" src="validate.js"></script>
	<script type="text/javascript" src="apikey.js"></script>


</head>
<body style="padding: 3em;">
	<p align="right"><a href="logout.php">Logout</a></p>
	<hr>
	<h3>Here we will create an API that will allow Users/Developers to order items from external systems</h3>
	<hr>
	<h4>We now put this feature of allowing users to generate an API key. Click the button to generate an API key</h4>

	<button class="btn btn-primary" id="api-key-btn">Generate API key</button><br><br>

	<strong>Your API key: </strong>(Note that if your API key is already in use by already running applications, generating a new key will stop the application from functioning)<br>

	<textarea cols="100" rows="2" id="api_key" readonly><?php echo fetchUserApiKey(); ?></textarea>

	<h3>Service description:</h3>
	We have a service/API that allows external applications to order food and also pull all order status  by using order id. Let's do it.

	<hr>
</body>
</html>