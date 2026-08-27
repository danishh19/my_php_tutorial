<?php 

	// include('ninjass.php'); // include is used to include a file, if the file is not found, it will give a warning but the script will continue to execute
	
	// require('ninjass.php'); // require is used to include a file, if the file is not found, it will give a fatal error and the script will stop executing

	include 'ninjas.php';

	require 'ninjas.php';

	//echo 'end of php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Tutorials</title>
</head>
<body>

	<?php include('content.php'); ?>
	<?php include('content.php'); ?>

</body>
</html>