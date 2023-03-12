
<?php
//livetest120323.php
//Live Test Date : 12.03.23, Module 06

/*PROBLEM
write a php scripts that contents of a file name ostad.txt, adds the current date and time to the contents of the file and saves it back to the file. if the file does not exists the script should create it

Solution :
*/

$file = "ostad.txt";

// Check if the file exists, if not, create it
if (!file_exists($file)) {
  touch($file);
}

// Get the current date and time
$date = date('Y-m-d H:i:s');

// Open the file for appending
$fp = fopen($file, 'a');

// Append the date and time to the file
fwrite($fp, $date."\n");

// Close the file
fclose($fp);

echo "Date and time appended to the file successfully!";
?>
