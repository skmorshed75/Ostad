<?php
//Concatenating several arrays.php
//12. Concatenating several arrays (very important)


$fruits = array('apple','banana','orange','palm','dates','jackfruits','tamarind','pineapple');
$random = array("a" => 12,"b"=>15,"c"=>20,"d"=>22,"e"=>77,12=>78,"g"=>87);

$newfruits1 = array_slice($fruits,0,3);
$newfruits2 = array_slice($fruits,3);
print_r($newfruits1);
print_r($newfruits2);

$newfruits = array_merge($newfruits1,$newfruits2);
//print_r($newfruits);


$newfruits1 = array_slice($fruits,0,3);
$newfruits2 = array_slice($fruits,3,null,true); //uses of plus sign we need to keep our actual index
$newfruits = ($newfruits1+$newfruits2);
print_r($newfruits);


