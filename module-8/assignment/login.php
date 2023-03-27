<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<h1>Login Form</h1>
	<form method="POST" action="logincheck.php">
		<label for="email">Email Address:</label>
		<input type="email" name="email" required><br><br>

		<label for="password">Password:</label>
		<input type="password" name="password" required><br><br>

		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>
