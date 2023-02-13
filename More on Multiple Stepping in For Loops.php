<?php
//More on Multiple Stepping in For Loops.php

/**
 * 0 to 100 divided by 7 or 11
 */

 for($i=0; $i<= 100; $i++){
    /*if($i % 7 == 0){
        echo $i.PHP_EOL;
    }*/

    //OR
    //if($i%7==0) echo $i."\n";
    //if($i%14==0) echo $i."\n";

    //OR
    //echo $i % 7 ==0?$i. "\n" : '';
    //echo $i % 11 ==0?$i. "\n" : '';
 }


//MULTIPLE STEPPING SYSTEMS with 7 & 11
for($i=0,$j=0;$i<=100; $i+=7, $j+=11){
    echo $i."--\n";
    echo $j <= 100 ? $j."\n":"";
}