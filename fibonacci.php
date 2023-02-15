<?php
//FIBONACCI SERIES

$veryOld = 0;
$old = 1;
$new = 1;
for($x = 0; $x <=20; $x++){
    echo $veryOld." ";
    $old = $new;
    $new = $old+$veryOld;
    $veryOld = $old;
}