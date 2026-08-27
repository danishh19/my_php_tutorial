<?php 

	// functions

	function sayHello($name = 'shaun', $time = 'morning'){
		echo "Good $time, $name";
	}

	// sayHello(); // output: Good morning, shaun
	// sayHello('mario'); // output: Good morning, mario (changed from shaun to mario)
	// sayHello('yoshi', 'night'); // output: Good night, yoshi (changed the name and time)

	function formatProduct($product){ //
		  // echo "{$product['name']} costs £{$product['price']} to buy <br/>"; 
		 return "The {$product['name']} costs £{$product['price']} to buy <br/>"; // return is used to return a value from the function, so that it can be used later in the code.
	}
	
	 // formatProduct(['name' => 'gold star', 'price' => 20]);

	  $formatted = formatProduct(['name' => 'gold star', 'price' => 20]); // the return value of the function is stored in the variable $formatted
	  echo $formatted; // output: The gold star costs £20 to buy

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

</body>
</html>