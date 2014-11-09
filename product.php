<?php 
	require_once("products.php");
	/*have to have this at the top...  had it below the set $product statement and it
	hadn't yet included the array, so "machine was chosen.*/
	
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	/*reports errors.  Only for this page??? if have php.ini properly setup, don't need the above.*/
/*how do you deal with blank data?  A black for product casts to 0.  Tried || NULL with no change*/
	if (array_key_exists($_GET['product'], $productsArray)) {
/*	if (isset($_GET['product'])) {*/
		$product = $_GET['product'];
		$quantity = $_GET['quantity'];
		if (($product < 0) || ($product > (count($productsArray)-1))) {
			$message = 'You have selected an item we don\'t have in stock. Please review our
			<a href="browse.php">products</a> and choose something else.';
		} else if ($quantity > 7 && $product == 0) {
			$message = ' You can only purchase up to 7 Mac\'s at this time.  
			Please order a <a href="browse.php">different</a> number.<br>';
		} else if ($quantity < 1) {
			$message = ' You have to order at least one.  
			Please order a <a href="browse.php">different</a> number.<br>';
		} else {
			$message = 
				'You have selected a ' . $productsArray[$product][0] 
				. ' machine and indicated that you would like to buy ' . $quantity . '.<br>'
				. $productsArray[$product][1] . '<br>'
				. 'They cost $' . money_format("%.2n", ($productsArray[$product][2])) . ' per unit.<br>';
		}
	} else {
		$message = 'Unknown error.  Please be sure to select a <a href="browse.php">valid product and number.</a>';
	}

	
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shady Business Site</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php require_once("header.php") ?>
	<main>
		<h1>
			<?php echo $message; ?>
		</h1>
	</main>
	<?php require_once("footer.php") ?>
</body>
</html>