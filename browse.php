<?php 
	/*I had "$productsArray = require_once("products.php") and it just did not work correctly.
	No need to redefine the array to itself*/
	require_once("products.php");



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
		<h1>Welcome to our shopping cart.</h1>
<!-- would you format like this? -->		
		<h2>
			Currently you can only order up to seven Mac's at a time.  
			All other products have no restrictions on quantity.
		<h2>
		<form action="product.php">
			<select name="product">
				<?php 
					/*for ($i = 0; $i < count($productsArray); $i++){
						echo '<option value="' . $i . '">' . $productsArray[$i][0] . '</option>';
						forgot to include $ along with i!!!
					}*/
					foreach ($productsArray as $key => $value) { ?>
						<option value=
							<?php  echo  $key . '>' . $productsArray[$key][0];  ?> 
						</option>
					<?php }	?>
					<!-- foreach value is the name of the product...doesn't display? displaying the key, and not the value
					since we're starting with an indexed array (not assoc).  Key is the index #...$value is an array.-->

			</select>
			<label>Quantity:</label>
<!-- when removed max from the selection, width of the input got very wide -->			
			<input type="number" name="quantity" value="1" min="1">
			<button>Submit</button>
		</form>
	</main>
	<?php require_once("footer.php") ?>
</body>	
</html>