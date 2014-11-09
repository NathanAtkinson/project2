<!DOCTYPE html>
<html lang="en">
<head>
	<!-- would there be any issue in using an include statement for the head info? 
	No problem to do so.-->
	<meta charset="UTF-8">
	<title>Shady Business Site</title>
	<link rel="stylesheet" type="text/css" href="/project2/css/styles.css">
	<!-- absolute file path to the style sheet (not relative file path) -->
<!-- is there any way to include the below w/o linking to every page?  There's no header in the header.php
file, so can't link? -->
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php require_once("header.php") ?>
	<main>
		<!-- <h1>Welcome to our shopping cart</h1> -->
		<h1>Do you want to see our list of <a href="browse.php">products</a>?</h1>
	</main>
	<?php require_once("footer.php") ?>
</body>
</html>