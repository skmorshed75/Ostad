<?php
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Check if both fields are filled
	if(empty($email) || empty($password)){
		echo "Both fields are required";
		exit();
    }
	//echo "Login Successful";
	?>
	<h3>Login is Successfull!</h3>
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