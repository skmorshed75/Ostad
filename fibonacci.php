<?php
//FIBONACCI SERIES

$veryOld = 0;
$old = 1;
$new = 1;
for($x = 0; $x <=10; $x++){
    echo $veryOld." ";
    $old = $new;
    $new = $old+$veryOld;
    $veryOld = $old;
}

echo PHP_EOL;
echo "-------------------"."\n";
//Alternative
function fibonacci($old, $new, $end){
    static $start;
    $start == $start ?? 1;
    if($start > $end){
        return;
    }
    $start++;

    echo $old." ";
    $_temp = $old+$new;
    $old = $new;
    $new = $_temp;
    fibonacci($old,$new,$end);
}
fibonacci(0,1,10);



