<?php
/*
Assignment Submitted by : Sheikh Mohammed Morshed
Submission Date : 13/03/2023

Topic:

Create an HTML form with the following fields:
Name (text input)
Email (text input)
Password (password input)
Profile Picture (file input)
Submit Button

Write a PHP script that:
Validates the form inputs (ensure that all fields are filled out and the email is in a valid format).
Saves the profile picture to the server in a directory named "uploads" with a unique filename.
Adds the current date and time to the filename of the profile picture before saving it to the server.
Saves the user's name, email, and profile picture filename to a CSV file named "users.csv".
Starts a new session and sets a cookie with the user's name.
Create a new HTML page that displays the contents of the "users.csv" file in a table.
*/
?>

<!DOCTYPE html>
<html>
  <head>
    <title>User Registration</title>
  </head>
  <body>
    <form action="" method="post" enctype="multipart/form-data">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br><br>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br><br>
      
      <label for="profile-picture">Profile Picture:</label>
      <input type="file" id="profile-picture" name="profile-picture" accept="image/*" required><br><br>
      
      <input type="submit" value="Submit">
    </form>
  </body>
</html>

<?php

// Validate the form inputs
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_FILES['profile-picture']['name'])) {
    echo "All fields are required.";
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validate email format
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
    exit;
}

// Save the profile picture to the server with a unique filename
$uploads_dir = 'uploads/';
$profile_picture = $_FILES['profile-picture']['name'];
$tmp_name = $_FILES['profile-picture']['tmp_name'];
$timestamp = date('YmdHis');
$filename = $uploads_dir . $timestamp . '_' . $profile_picture;
move_uploaded_file($tmp_name, $filename);

// Save the user's name, email, and profile picture filename to a CSV file
$file = fopen('users.csv', 'a');
fputcsv($file, array($name, $email, $filename));
fclose($file);

// Start a new session and set a cookie with the user's name
session_start();
$_SESSION['name'] = $name;
setcookie('name', $name, time() + 3600, '/');

// Redirect the user to the success page
header('Location: success.php');
exit;
?>

