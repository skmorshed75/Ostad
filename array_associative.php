<?php
//array_associative.php

$foods = [
    'vegetables' => 'brinjal, brocolli, carrot, capsicum',
    'fruits' => 'apple, banana, orange',
    'drinks' => 'water, milk',
];

//$foods['drinks'] .= ", juice, coke, fanta";

//echo $foods['fruits'];

foreach($foods as $a=>$b){
    echo $a." = ".$b."\n";
};

//$keys = array_keys($foods);
//$keys = array_values($foods);
//print_r($keys);

// $keys = array_keys($foods);
// $_tmpCount = Count($keys);
// for($i=0; $i<$_tmpCount; $i++){
//     $key = $keys[$i]."\n";
//     echo $key;
// }

echo ".........................."."\n";

$values = array_values($foods);
$_tmpCount = Count($values);
for($i=0; $i<$_tmpCount; $i++){
    $value = $values[$i]."\n";
    echo $value;
}
