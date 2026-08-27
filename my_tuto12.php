<?php 

	// continue and break
	
	$products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
	];

	foreach($products as $product){ // loop through the products

		if($product['name'] === 'lightning bolt'){ // if the product name is lightning bolt, break the loop
			break; // break out of the loop
		}

		if($product['price'] > 15){ // if the product price is greater than 15, skip this iteration
			continue; // skip the rest of the loop body and move to the next iteration
		}

		echo $product['name'] . '<br />'; // output the product name

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

</body>
</html>