<!doctype html>
<html>
<head>

</head>

<body>
	<h1>Intro to PHP</h1>
	
	<a href="gallery.php?page=flowers">Flowers</a>
	<a href="gallery.php?page=zoo">Zoo</a>
	<a href="gallery.php?page=landscapes">Landscapes</a>
	
	<form action="index.php" method="post">
		<label for="user">Username</label>
		<input id="user" type="text" name="user" size="10">
		<br>
		<label for="pass">Password</label>
		<input id="pass" type="password" name="pass" size="15">
		<br>
		<input type="submit" value="Sign in">
	</form>
	
<?php
/*Harvest the POST data*/
if(isset($_POST['user'])) {
	$username = $_POST['user'];
} else{
	$username = "";
}

if(isset($_POST['pass'])) {
	$password = $_POST['pass'];
} else{
	$password = "";
}

$realPassword = "password";
$realUsername = "username";

if($realUsername == $username && $realPassword == $password) {
	echo "Welcome $username";
} else{
	echo "You are not logged in";	
}

?>
</body>
</html>