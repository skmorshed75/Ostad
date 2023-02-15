<?php
//FACTORIAL

function factorial(int $n){
    $result = 1;
    for($i=$n; $i>1; $i--){
        $result*=$i;
    }
    return $result;
}

$x = 4;
echo "Factorial of {$x} is ".factorial($x);