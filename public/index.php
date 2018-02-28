<?php

	include '../global.php';

	$route = Router::parseGet($_GET);

	if ($route['type'] == 'redirect') {
		header('Location: ' . $route['route']);
		exit();
	} else {
		$page = new Page($route['route']);
	}

?>

<?php
	/*
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Error</title>
	</head>
	<body>
		<h1>Error</h1>
		<p>
			If you are seeing this there has been an error with the webservice. Please contact the site admin.
		</p>
	</body>
</html>

<?php
	*/
?>