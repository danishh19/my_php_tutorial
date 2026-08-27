<?php 

	// Variable Scope (where variables can and cannot be accessed)

	// ----------------------------------------
	// 1. LOCAL VARIABLES
	// Variables created inside a function only exist inside that function.
	// ----------------------------------------

	function myFunc(){
		$price = 10; // local variable (only exists inside myFunc)
		echo $price; // works: prints 10
	}

	// myFunc();
	// echo $price; // ERROR: $price does not exist outside myFunc

	function myFuncTwo($age){
		echo $age; // parameter variables are also local to this function
	}

	// myFuncTwo(25);
	// echo $age; // ERROR: $age does not exist outside myFuncTwo


	// ----------------------------------------
	// 2. GLOBAL VARIABLES
	// Variables created outside functions are global.
	// ----------------------------------------

	$name = 'mario'; // global variable

	// To access or change a global variable inside a function, use the 'global' keyword
	// function sayHello(){
	// 	global $name; // brings the global $name into this function
	// 	$name = 'yoshi'; // modifies the global $name
	// 	echo "hello $name ";
	// }

	// sayHello();
	// echo $name; // prints 'yoshi' because sayHello modified the global variable


	// ----------------------------------------
	// 3. PASS BY REFERENCE (using &)
	// '&' passes the actual variable itself, not just a copy of its value.
	// Any change made inside the function directly changes the original variable.
	// ----------------------------------------

	function sayBye(&$name){
		$name = 'wario'; // changes the original $name variable
		echo "bye $name ";
	}

	sayBye($name); // outputs: "bye wario " and changes $name to 'wario'
	echo $name;    // outputs: "wario" (because the original variable was changed)


?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

</body>
</html>