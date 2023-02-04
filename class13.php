<?php
//Nested If Else and Readability of Code

$condition1 = false;
$condition2 = false;
$condition3 = true;

if($condition1 && $condition2 && $condition3 == true){
    echo "Hello";
} else if($condition1 && $condition2 == true){
    echo "No 1";
} else if ($condition1 == true) {
    echo "No 2";
} else {
    echo "No 3";
}

