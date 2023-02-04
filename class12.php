<?php
//If Else, Leap Years and How to Shortcut Complex Conditions

//LEAF YEAR CALCULATION
//1 - divisible by 4?
//2 - divisible by 100?
//3 - divisible by 400?

$year = 2400;
if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 ==0)){
    echo "{$year} is a leaf year";
} else {
    echo "{$year} is not a leaf year";
}