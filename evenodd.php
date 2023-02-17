<?php
//DETERMINE IF THE ARGUMENT IS EVEN OR ODD

function isEven($n){
    if($n%2==0){
        return true;
    }
    return false;
}

//Function Call
$x = 88;
if(isEven($x)){
    echo "{$x} is EVEN Number";
} else {
    echo "{$x} is ODD Number";
}