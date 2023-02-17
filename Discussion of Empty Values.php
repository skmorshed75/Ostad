<?php
//Discussion of Empty Values.php
//9. Discussion of Empty Values (Important)

$name = '';
if(isset($name)){
    echo "Name is set";
} else {
    echo "Name is not set";
}

echo "\n";

if(empty($name)){
    echo "Name is Empty";
} else {
    echo "Name is not Empty";
}

echo "\n";
if(isset($name) && is_numeric($name) || $name !='') {
    echo "Name is set and it's not empty";
} else {
    echo "Name is not set and it's empty";
}