<?php 

	// Functions in PHP

	// Function with default parameter values
	function sayHello($name = 'shaun', $time = 'morning'){
		echo "Good $time, $name";
	}

	// Calling function with default arguments -> "Good morning, shaun"
	// sayHello();

	// Calling function with one argument overriding default $name -> "Good morning, mario"
	// sayHello('mario');

	// Calling function with two arguments overriding both defaults -> "Good night, yoshi"
	sayHello('yoshi', 'night');

	// Function that takes an associative array and returns a formatted string
	function formatProduct($product){
		// Directly echoing inside function (commented out)
		// echo "{$product['name']} costs £{$product['price']} to buy <br />";

		// Returning the string so it can be stored in a variable or printed later
		return "The {$product['name']} costs £{$product['price']} to buy <br />";
	}
	
	// Calling formatProduct without capturing return value (won't output anything)
	// formatProduct(['name' => 'gold star', 'price' => 20]);

	// Storing returned value in a variable and echoing it
	// $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
	// echo $formatted;

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

</body>
</html>