<?php
//PHP Class15 : Another way to check condition

$color = "green";
switch($color){
    /*case 'red' :
        echo ucwords($color) . " is my favourite color";
        break;
    case 'green' :
        echo ucwords($color)." is my favourite color";
        break;
    */
    case 'red' :
    case 'green' :
        echo ucwords($color) ." is my favourite color";
        break;
    case 'blue' :
        echo ucwords($color)." is not my favourite color";
        break;
    default: 
        echo ucwords($color)." color is ok";
}
	
