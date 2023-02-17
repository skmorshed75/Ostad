<?php
//array_associative_to_string.php
//6. Associative Array to String Conversion - Serialize, json

$student = array(
    'fname' => 'Jamal',
    'lname' => 'Ahmed',
    'age'=>18,
    'section' =>'B'
);
//print_r($student);
//echo $student['fname']." ".$student['lname'];
printf("Student name is %s %s \n",$student['fname'],$student['lname']);

$serialized = serialize($student);
print_r($serialized);

$unserialized = unserialize($serialized);
print_r($unserialized);

$jsondata = json_encode($student);
print_r($jsondata);
echo "\n";
//$jsondecode = json_decode($jsondata);
$jsondecode = json_decode($jsondata,true); //true is used for show as associative array
print_r($jsondecode);