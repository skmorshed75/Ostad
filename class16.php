<?php
//More on switch case

$n = -21;
$r = $n % 2;

/*
switch($r) {
	case 0 :
		switch($n) {
			case $n > 0:
				echo "$n is a positive even number";
				break;
			case $n<0:
				echo "$n is a negative even number";
				break;
		}
		break;
	default:
	switch($n){
		case $n>0:
			echo "$n is a positive odd number";
			break;
		case $n<0:
			echo "$n is a negative odd number";
			break;
	}
}
*/

$n = -21;
$r = $n % 2;

switch(true){
	case (0 == $r && $n>0) :
		echo "$n is a positive even number";
		break;
	case (1 == $r && $n>0) :
		echo "$n is a positive odd number";
		break;
	case (0 == $r && $n<0) :
		echo "$n is a negative even number";
		break;
	case (-1 == $r && $n<0) :
		echo "$n is a negative odd number";
		break;
}
