<?php
//Multiple Stepping in For Loops.php

//STEPPING FROM MAXIMUM TO MINIMUM
for($i=10;$i>0; $i-=1){
    echo $i." : ".(11-$i);
    echo PHP_EOL;
}

//ALTERNATIVE
echo "Alternative\n";
for($i=10,$j=1; $i>0;$i-=1,$j++ ){
    echo $i." : ".$j;
    echo PHP_EOL;
}


