<?php 

	// variable scope

	// local vars

	function myFunc(){ // local variable
		$price = 10;
		echo $price;
	}

	// myFunc();
	// echo $price; // this will give an error because $price is a local variable and cannot be accessed outside the function

	function myFuncTwo($age){
		echo $age;
	}

	// myFuncTwo(25); // this will work because $age is a parameter and can be accessed outside the function
	// echo $age; // this will give an error because $age is a local variable and cannot be accessed outside the function

	// global variables

	$name = 'mario'; 

	// function sayHello(){
	// 	global $name; // global keyword is used to access a global variable inside a function
	// 	$name = 'yoshi'; // this will create a local variable $name and will affect the global variable $name
	// 	echo "hello $name ";
	// }

	// sayHello(); // 
	// echo $name; // this will output "hello yoshi yoshi" because the global variable $name is affected by the local variable $name inside the function

	function sayBye(&$name){ // the & symbol is used to pass the variable by reference, so that the global variable $name can be updated inside the function
		$name = 'wario'; // updates the global variable $name because it is passed by reference using the & symbol
		echo "bye $name ";
	}

	sayBye($name);
	echo $name; // this will output "bye wario wario" because the global variable $name is updated inside the function


?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

</body>
</html>