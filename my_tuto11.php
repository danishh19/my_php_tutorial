<?php 

	// conditional statements
	
	 $price = 20;

	// if($price < 30){ // checks whether the price is below 30
	// 	echo 'if condition met'; 
	// } elseif($price === 20) {
	// 	echo 'elseif condition met';
	// } else {
	// 	echo 'condition not met';
	// }

	$products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
	];

	foreach($products as $product){

		 // display products priced between 3 and 14
		 if($product['price'] < 15 && $product['price'] > 2){  
		 	echo $product['name'] . '<br />';
		 }

		 // display products priced above 20 or below 10
		 if($product['price'] > 20 || $product['price'] < 10){
		 	echo $product['name'] . '<br />';
		 }

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<div>
		<ul>
			<?php // loop through each product in the array ?>
			<?php foreach($products as $product){ ?>
				<?php // display product name only if price is greater than 15 ?>
				<?php if($product['price'] > 15){ ?>
					<li><?php echo $product['name'] ?></li>
				<?php } ?>
			<?php } ?>
		</ul>
	</div>

</body>
</html>