
<?php
//MODULE 3 QUIZ


function fun($x,$y){
    $x=4;
    $y=3;
    $z=$x+$y/$y+$x;
    echo "$z";
}
fun(3,4);

$n=array(1,2,3,4,5);
$i=0;
do{
    echo $n[$i];
    $i++;

}while ($i<count($n));

$n=array(1,2,3,4,5);
$sum=0;
foreach($n as $ns){
    if($ns%2 ==0) {
        continue;
    }
    $sum+=$ns;
}
echo PHP_EOL;
echo $sum;

function strFunc($str){
    if(strlen($str) == 0){
        return "";
    } else {
        return strFunc(substr($str,1).substr($str,0,1));
    }
}
echo strFunc("hello");

$foo =  function($x){
    return $x*2;
};
$bar =   function($x) use ($foo){
    return $foo($x)+1;
};
echo $bar(5);