<?php
    //  conditional statements

    $price = 20;

    // if ($price < 10) { // if the price is less than 10
    //     echo "The condition is met"; // this will be executed
    // } elseif ($price < 30) { // if the price is less than 20
    //     echo "elseif condition is met"; // this will be executed
    // } else { // if the price is more than 20
    //     echo "The condition is not met"; // this will be executed
    // }

     $products = [
         ['name' => 'shiny star', 'price' => 20],
         ['name' => 'green shell', 'price' => 10],
         ['name' => 'red shell', 'price' => 15],
         ['name' => 'gold coin', 'price' => 5],
         ['name' => 'lightning bolt', 'price' => 40],
         ['name' => 'banana skin', 'price' => 2]
     ];

     foreach($products as $product){ // loop through each product

		// if($product['price'] < 15 && $product['price'] > 2){ // if the price is less than 15 and more than 2
		// 	echo $product['name'] . '<br/>'; // this will be executed
		// }

		// if($product['price'] > 20 || $product['price'] < 10){ // if the price is more than 20 or less than 10
		// 	echo $product['name'] . '<br/>'; // this will be executed
		// }

	}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorial</title>
    </head>
    <body>

        <div>
		<ul>
			<?php foreach($products as $product){ ?> // loop through each product
				<?php if($product['price'] > 15){ ?> // if the price is more than 15
					<li><?php echo $product['name'] ?></li> // this will be executed
				<?php } ?>
			<?php } ?>
		</ul>
	</div>

    </body>
</html>