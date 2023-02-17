<?php
//copy_byvalue.php
//7. Copy by Value and Copy by Reference

$person = array('fname'=>'Hello', 'lname' =>'World');
//print_r($person);
$newperson = $person;
$newperson['lname']='Pluto'; //Deep copy or Copy by Value
print_r($person);
print_r($newperson);


$person = array('fname'=>'Hello', 'lname' =>'World');
$newperson = &$person; //Shallow copy or Copy by Reference
$newperson['lname']='Pluto'; //
print_r($person);
print_r($newperson);


function printData(&$person){ //& is used for Copy by Reference or it will be Copy by Value
    $person['fname'] .= " Changed";
    print_r($person);
}

printData($person);
print_r($person);