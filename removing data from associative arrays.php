<?php
//removing data from associative arrays.php
//8. Removing data from associative arrays

$person = array('fname' => 'Hello', 'lname' => 'World');
print_r($person);

unset($person['lname']); //Remove Data from an Associative Array
print_r($person);