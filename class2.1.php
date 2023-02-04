<?php
// Varialble, Constant & Comments
define('PI',3.14159); //DECLARATION OF CONSTANT
echo "Value of PI = {PI}".PI;

echo "\n";
$task = "READ";
echo $task;
echo "\n";
$task = "WRITE";
echo $task;
echo "\n";

echo "Constant is : ". constant('PI'); //OUTPUT OF CONSTANT
echo "\n";
$constant = 'constant'; //CONVERT CONSTANT AS VARIABLE
echo "Value of PI = {$constant('PI')}"; //OUTPUT OF CONSTANT
?>