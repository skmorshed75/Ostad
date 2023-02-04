<?php
//$name = "Neptune";
//var_dump($name);

//$age = 22;
//$age = Null;
//var_dump($age);

//$name1 = "Sheikh";
//$name2 = "Md Morshed";
//var_dump($name1,$name2);

//$name = "Earth";
//echo "We are living on $name";
// OR using carley braces
//echo "We're living on {$name}";
//echo "We're living on {$name}";
// OR single code
//echo 'We\'re living on '.$name;
// Good practice is 
//echo "We're living on {$name}";
//printf("We're living on %s",$name); //SMART USES FOR OUTPUT

$fname = "Isaac";
$lname = "Newton";
//printf("His name is %s %s",$fname,$lname);
//printf("His %s name is %s %s","Full",$fname,$lname);

/*echo "My
Name
is
{$fname} {$lname}
Mohammed\n 
Morshed";
*/
$planet1 = "Mercury";
$planet2 = "Jupiter";

//echo "The smallest planet is ".$planet1. " and the largest planet is ". $planet2 ."\n";
echo "The smallest planet is {$planet1} and the largest planet is {$planet2}\n";
printf("The smallest planet is %s and the largest planet is %s",strtoupper($planet1), strrev($planet2));
//FOR MORE STUDY php.net/printf

