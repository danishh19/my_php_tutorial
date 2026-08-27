<?php 

	// if(isset($_GET['submit'])){ // check if the submit button is clicked
	// 	echo $_GET['email'] . '<br />'; // get the data from the form and display it
	// 	echo $_GET['title'] . '<br />'; // get the data from the form and display it
	// 	echo $_GET['ingredients'] . '<br />';
	// }

	// if(isset($_POST['submit'])){ // more secure way to get the data from the form
	// 	echo $_POST['email'] . '<br />'; 
	// 	echo $_POST['title'] . '<br />'; 
	// 	echo $_POST['ingredients'] . '<br />'; // get the data from the form and display it
	// }

	// if(isset($_POST['submit'])){
	// 	echo htmlspecialchars($_POST['email']) . '<br />'; // htmlspecialchars() function is used to prevent XSS attacks by converting special characters to HTML entities
	// 	echo htmlspecialchars($_POST['title']) . '<br />';
	// 	echo htmlspecialchars($_POST['ingredients']) . '<br />';
	// }

	// if(isset($_POST['submit'])){
		
		// check email
	//	if(empty($_POST['email'])){ // check if the email field is empty
	//		echo 'An email is required <br />'; // display an error message
	//	} else{
	//		echo htmlspecialchars($_POST['email']) . '<br />';
	//	}

		// check title
	//	if(empty($_POST['title'])){
	//		echo 'A title is required <br />';
	//	} else{
	//		echo htmlspecialchars($_POST['title']) . '<br />';
	//	}

		// check ingredients
	//	if(empty($_POST['ingredients'])){
	//		echo 'At least one ingredient is required <br />';
	//	} else{
	//		echo htmlspecialchars($_POST['ingredients']) . '<br />';
	//	}

	//} // end POST check

	// 	$email = $title = $ingredients = '';
		
		// check email
	// 	if(empty($_POST['email'])){ // check if the email field is empty
	// 		echo 'An email is required <br />'; // display an error message
	// 	} else{
	// 		$email = $_POST['email']; // get the email from the form
	// 		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ // check if the email is valid using filter_var() function
	// 			echo 'Email must be a valid email address';
	// 		}
	// 	}

		// check title
	// 	if(empty($_POST['title'])){
	// 		echo 'A title is required <br />';
	// 	} else{
	// 		$title = $_POST['title'];
	// 		if(!preg_match('/^[a-zA-Z\s]+$/', $title)){ // check if the title contains only letters and spaces
	// 			echo 'Title must be letters and spaces only';
	// 		}
	// 	}

		// check ingredients
	// 	if(empty($_POST['ingredients'])){
	// 		echo 'At least one ingredient is required <br />';
	// 	} else{
	// 		$ingredients = $_POST['ingredients'];
	// 		if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){ // check if the ingredients are a comma separated list using preg_match() function
	// 			echo 'Ingredients must be a comma separated list';
	// 		}
	// 	}

	// } // end POST check

	$email = $title = $ingredients = '';
	$errors = array('email' => '', 'title' => '', 'ingredients' => ''); // create an associative array to store the error messages

	if(isset($_POST['submit'])){
		
		// check email
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be a valid email address'; // check if the email is valid using filter_var() function
			}
		}

		// check title
		if(empty($_POST['title'])){
			$errors['title'] = 'A title is required';
		} else{
			$title = $_POST['title'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
				$errors['title'] = 'Title must be letters and spaces only'; // check if the title contains only letters and spaces
			}
		}

		// check ingredients
		if(empty($_POST['ingredients'])){
			$errors['ingredients'] = 'At least one ingredient is required';
		} else{
			$ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				$errors['ingredients'] = 'Ingredients must be a comma separated list'; // check if the ingredients are a comma separated list using preg_match() function
			}
		}

		if(array_filter($errors)){
			//echo 'errors in form';
		} else {
			//echo 'form is valid';
			header('Location: index.php');
		}

	} // end POST check

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Add a Pizza</h4>
		<form class="white" action="add.php" method="POST">
			<label>Your Email</label>
			<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
			<div class="red-text"><?php echo $errors['email']; ?></div> 
			<label>Pizza Title</label>
			<input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
			<div class="red-text"><?php echo $errors['title']; ?></div>
			<label>Ingredients (comma separated)</label>
			<input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
			<div class="red-text"><?php echo $errors['ingredients']; ?></div>
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>