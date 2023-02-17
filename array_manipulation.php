<?php
//array_manipulation.php
//ARRAY_SHIFT(), ARRAY_UNSHIFT(), ARRAY_POP(), ARRAY_PUSH()

$students = [
    "Rahim",
    "Karim",
    123,
    "Monir",
];

$students[2] = "Shafik";
//$student = array_pop($students); //Remove Last index of Array
//$student = array_shift($students); //Remove First index of Array
//echo $student."\n";

// $n = count($students);
// for($i = 0; $i < $n; $i++){
//     echo $students[$i]."\n";
// }   

$students[] = "Jamal"; //Insert Data in Last Array OR
array_push($students, "Kamal"); //Insert Data in Last Array
array_unshift($students,"Salam");

$n = count($students);
for($i = 0; $i < $n; $i++){
    echo $students[$i]."\n";
}
