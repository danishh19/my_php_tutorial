<?php 

	// include & require (used to load code from other files)

	// include: if file is missing, shows a warning but continues running the code
	// include('ninjass.php');
	
	// require: if file is missing, stops the script completely with an error
	// require('ninjass.php');

	// You can also write them without parentheses:
	// include 'ninjas.php';
	// require 'ninjas.php';

	// echo 'end of php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<?php // Insert content from another file into the HTML ?>
	<?php include('content.php'); ?>
	<?php include('content.php'); ?>

</body>
</html>