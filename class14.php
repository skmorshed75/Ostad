<?php
//Working with Ternary Operators and Nested Ternary Operators

$n = 10;
if(12 == $n) {
    echo "Twelve";
} else if (10 == $n) {
    echo "Ten";
} else {
    echo "A Number";
}

echo "\n";

$numberInWord = (12 == $n) ? "Twelve" : (10 == $n) ? "Ten" : "A Number";

echo $numberInWord;

$result = ($n % 2 == 0) ? "Even Number" : "Odd Number";
echo "\n".$result;