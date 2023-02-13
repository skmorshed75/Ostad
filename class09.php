<?php
//The magic of the printf function

$fname = "Isaac";
$lname = "Newton";
$middlename = "Nothing";
printf('His name is %3$s, %1$s %2$s', $fname, $middlename, $lname);

printf('The binary equivalent of %1$d is %1$b', 10);


echo "\n";
$n = 30.128; //convert to 2 digits after decimal
printf("%.2f", $n);

$m = 127; //0127
$n = 23; //0023
echo "\n";
printf("%04d \n",$m);
printf("%04d \n",$n);

$m = 127.34; //0127.35
printf("%07.2f \n", $m);

if (a == b)
    {
        "key" => 20
   "key2" => 30
    echo "hello";
}