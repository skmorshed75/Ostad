<?php
//EVEN OR ODD

function evenOrOdd($n){
    if($n%2==0){
        return true;
    }
    return false;
}

//Function Call
$x = 88;
if(evenOrOdd($x)){
    echo "{$x} is EVEN Number";
} else {
    echo "{$x} is ODD Number";
}