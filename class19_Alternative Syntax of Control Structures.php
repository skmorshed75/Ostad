<?php
//Alternative Syntax of Control Structures

$n = 13;

if($n % 2 == 0) {
    echo "Even number";
} else {
    echo "Odd number";
}

//ALTERNATE SYNTAX
echo PHP_EOL;
if($n % 2 == 0) :
    echo "Even Number";
    echo PHP_EOL;
    echo "Some Text";
else :
    echo "Odd Number";
    echo PHP_EOL;
    echo "Some more Text";
endif;

echo PHP_EOL;
switch ($n%2 == 0) :
    case 0 :
        echo "Even number";
        break;
    default :
        echo "Odd number";
endswitch;