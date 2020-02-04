<?php
include('includes/config.php');

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}
?>

<html>
<head>
	<title>Welcome to Slotify!</title>
</head>

<body>
	<h2>Welcome!</h2>
</body>

</html>
