<?php
//A few words about sprintf
$fname = "Isaac";
$lname = "Newton";
$middlename = "Nothing";
$output = sprintf('His name is %3$s, %1$s %2$s', $fname, $middlename, $lname);
echo strtoupper($output);
