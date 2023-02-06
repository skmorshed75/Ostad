<?php
//Interesting issue with switch case

$string = "8balls";

switch($string) {
    case (string) "9balls" :
        echo "Nine balls";
        break;
    case (string) 8 :
        echo "Eight";
        break;
    case (string) "8balls" :
        echo "Eight Balls";
        break;
    default :
        echo "No string selected";
}