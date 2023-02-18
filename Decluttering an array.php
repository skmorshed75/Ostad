<?php
//Decluttering an array.php
//11. Decluttering an array
// Used : array_splice

$fruits = array('apple','banana','orange','palm','dates');
$random = array("a" => 12,"b"=>15,"c"=>20,"d"=>22,"e"=>77,12=>78,"g"=>87);
$newfruits = array('jackfruits','tamarind','pineapple');

//$someFruits = array_splice($fruits,2,2);
//$someFruits = array_splice($fruits,1,-1);
$someFruits = array_splice($fruits,1,-1,$newfruits);
print_r($someFruits);
print_r($fruits);

