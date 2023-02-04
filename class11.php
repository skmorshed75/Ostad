<?php
//Discussion of Condition (Logic) and Logical Operators in PHP

$n = 99;
if($n % 2 == 0){
    echo "{$n} is an even number";
} else
{
    echo "{$n} is an odd number";
};

echo "\n";
$age = 15;
if($age >= 13 && $age <= 19){
    echo "This person is a teenager";
} elseif($age <13) {
    echo "This is a children";
} else {
    echo "This person is adult";
}

echo "\n";

$food = "salmons";
if("tuna" == $food || "salmon" == $food){
    echo "{$food} has vitamin D";
} else {
    echo "We don't know if {$food} contains vitamin D";
}