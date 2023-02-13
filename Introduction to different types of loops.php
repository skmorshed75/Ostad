<?php
//Introduction to different types of loops

for ($i = 0; $i <= 10; $i++){
    echo $i;
    echo PHP_EOL;
}

// Print Odd Number
for ($i = 1; $i <=20; $i+= 2){
    echo $i;
    echo PHP_EOL;
}

//Print Even Number
for($i=2;$i<=20;$i+=2){
    echo $i;
    echo PHP_EOL;
}

//Print Star 
for($i=1;$i<10;$i++){
    echo PHP_EOL;
    for($j=0;$j<$i;$j++){
        echo "*";
    }
}

echo PHP_EOL;

//while loop
$i=0;
while($i<10){
    $i++;
    echo $i.PHP_EOL;
    
}

//do while loop
$i=0;
do{
    $i++;
    echo $i.PHP_EOL;
}while($i<10);

//GOTO Loop
echo "GOTO LINE";
$i=0;
a:$i++;
echo $i.PHP_EOL;
if($i<10) goto a;
