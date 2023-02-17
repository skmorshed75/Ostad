<?php
//extracting some data from an array.php
//10. Extracting some data from an array while keeping the original array intact

$fruits = array('apple','banana','orange','palm','dates');
//$someFruits = array_slice($fruits,1); //from one to last
//$someFruits = array_slice($fruits,1,3); //from one to next 3
$someFruits = array_slice($fruits,1,4); //from one to next 4
$someFruits = array_slice($fruits,1,-1); //from one to last before 1
$someFruits = array_slice($fruits,1,-2); //from one to last before 2
$someFruits = array_slice($fruits,-3); //from last to next 3
$someFruits = array_slice($fruits,-3,-1); //from last to next 3
$someFruits = array_slice($fruits,3,2, true); //from 3 to next 2 with default array index
print_r($someFruits);

$random = array("a" => 12,"b"=>15,"c"=>20,"d"=>22,"e"=>77,12=>78,"g"=>87);
$randomData = array_slice($random,2,4);
print_r($randomData);
$randomData = array_slice($random,3,3   , true); //true is used to keep original Key
print_r($randomData);