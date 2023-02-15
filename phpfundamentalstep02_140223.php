<?php
//phpfundamentalstep02_140223.php

//For Loop, Foreach Loop, While Loop, Do While Loop

for($n=1; $n<=10; $n++) {
    echo $n."\n";
}

echo "--------------"."\n";

for($x=0; $x<=10; $x++){
    if($x==4){
        break;
    }
    echo "The number is $x"."\n";
}

echo "----------------"."\n";


for($x=0; $x<=10; $x++){
    if($x==4){
        echo "The continued number is $x"."\n";
        continue;
        
    }
    echo "The number is $x"."\n";
}


//Array
$seasons = array("Summer","Winter","Autumn","Rainy");
//echo $seasons[1], $seasons[3], $seasons[0];
foreach($seasons as $season){
    echo $season."\n";
}

//While Loop
$n=1;
While($n<=10){
    echo "The number for While Loop is ".$n."\n";
    $n++;
}


//Do Loop
$n=1;
do{
    echo "The number for DO Loop is ".$n."\n";
    $n++;
}while ($n<=10);

//Function

function sayHello(){
    echo "Say Hello";
};

sayHello();

echo "---------------------"."\n";

function sayHello2($name){
    echo "Hello {$name}";
    echo PHP_EOL;
}

sayHello2("Moon! I love u")."\n";
sayHello2("Hi Mukta")."\n";
sayHello2("Hello sweety");

echo "---------------------"."\n";

//FUNCTION SUMMATION
function sum($x,$y){
    $z=$x+$y;
    return $z;
}
echo "The summation is ".sum(3,9);


echo "---------------------"."\n";

function display($number){
    if($number <=5){
        echo "$number"."\n";
        display($number+1);
    }
    
}
display(6);