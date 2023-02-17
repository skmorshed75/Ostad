<?php
//Continue and break between loops.php

for($i=20; $i<100; $i++){
    if($i < 80){
        continue;
    } else {
        //break;
    }
    echo $i;
    echo PHP_EOL;
}