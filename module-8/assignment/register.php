<?php
if(isset($_POST['submit'])){
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];

	// Check if all fields are filled
	if(empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)){
		echo "All fields are required";
		exit();
	}

	// Check if email is valid
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "Invalid email format";
		exit();
	}

	// Check if password and confirm password match
	if($password != $confirmPassword){
		echo "Passwords do not match";
		exit();
	}

	// Add the user to the database
	// Code to add user to database goes here

	// Display confirmation message
	//echo "Registration successful!";

	?>
	<h3>User Registration is successfull!</h3>
	<?php
}
?>

<style>
	h3{
		color: green;
		font-size: 18px;
		margin: 30px;
	}
</style>