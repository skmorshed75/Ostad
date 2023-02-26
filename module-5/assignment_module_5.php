<?php
/*
assignment_module_5.php

Name : Sheikh Mohammed Morshed
Assignment Title: HTML, Basic OOP, and Superglobal Variables in PHP

Task 1: HTML Basics
-----------------------------------------------------------------------------------------------------
Create an HTML form that allows users to input their name and email address. The form should have two fields: one for name and one for email. Use appropriate HTML tags to structure the form.
---------------------------------------------------------------------------------------------------*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Module 05</title>
</head>
<body>
    <form action="#" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <input type="submit" value="Submit">
    </form>
</body>
<br>
</html>

<?php

/*
Task 2: Basic OOP in PHP
-----------------------------------------------------------------------------------------
Create a PHP class called "Person" with the following properties and methods:

Properties:
Name, Email

Methods:
setName($name): sets the name property
setEmail($email): sets the email property
getName(): returns the name property
getEmail(): returns the email property

Create an instance of the Person class and set the name and email properties. Use the getName() and getEmail() methods to display the properties on the webpage.
--------------------------------------------------------------------------------------------*/

//SOLUTION
//********* */
class Person {
    public $name;
    public $email;
  
    public function setName($name) {
      $this->name = $name;
    }
  
    public function setEmail($email) {
      $this->email = $email;
    }
  
    public function getName() {
      return $this->name;
    }
  
    public function getEmail() {
      return $this->email;
    }
}
  
$person = new Person();
$person->setName("Moonsana Pori");
$person->setEmail("moonsana@abcd.com");

echo "Name: " . $person->getName() . "\n";
echo "Email: " . $person->getEmail() . "\n";



/*
Task 3: Superglobal Variables in PHP
---------------------------------------------------------------------------------------------------
Create a PHP script that retrieves the user's name and email from the HTML form in Task 1 using the $_POST superglobal variable. Create a new instance of the Person class and use the setName() and setEmail() methods to set the name and email properties based on the form data. Use the getName() and getEmail() methods to display the properties on the webpage.
---------------------------------------------------------------------------------------------------*/


 // Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the name and email from the form data
  $name = $_POST["name"];
  $email = $_POST["email"];

  // Create a new instance of the Person class
  $person = new Person();

  // Set the name and email properties using the setName() and setEmail() methods
  $person->setName($name);
  $person->setEmail($email);

  // Display the name and email properties using the getName() and getEmail() methods
  echo "Name: " . $person->getName() . "\n";
  echo "Email: " . $person->getEmail() . "\n";
}
