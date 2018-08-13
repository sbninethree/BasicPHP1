<!doctype html>
<html>
<head>

</head>

<body>

<?php
	/*Harvest the GET Data from the index page*/
	if(isset($_GET['page'])) {
	/*Store the data*/
	$thePage = $_GET['page'];
	
	echo "<h1>".strtoupper($thePage)."</h1>";
	echo "<p>Weclome to my ".ucfirst($thePage)." gallery</p>";
	echo "<img src='assets/$thePage.jpg'>";
	
	} else{
		$thePage = "It isn't set!";
	}
?>

</body>
</html>