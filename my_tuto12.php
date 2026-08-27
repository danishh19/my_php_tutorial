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

	// Loop through each product in the array
	foreach($products as $product){

		// Stop the loop completely if the product name is 'lightning bolt'
		if($product['name'] === 'lightning bolt'){
			break;
		}

		// Skip the current iteration if the price is greater than 15
		if($product['price'] > 15){
			continue;
		}

		
		echo $product['name'] . '<br />';

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