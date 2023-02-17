<?php
//arraytostring.php
//String to Array and Array to String, Multiple Delimiters

$vegetables = 'brinjal, brocolli, carrot, capsicum';
//var_dump($vegetables);

$vegetables = explode(', ','brinjal, brocolli, carrot, capsicum'); //remove , and space
var_dump($vegetables);
//print_r($vegetables);

$vegetablesString = join(', ',$vegetables); //converted to string
//echo $vegetablesString;
echo count($vegetables);

$vegetables = preg_split('/(, |,)/', 'brinjal, brocolli, carrot, capsicum,potato,sweet-potato,onion,ginger, lentil'); //remove comma & space or comma uses preg_split() instead of explode
print_r($vegetables);

