<?php
//decrypt.php
//21.02.23

$original = "abcdefghijklmnopqrstuvwxyz1234567890";
$key = "o7x32ejyazusd1bm8ltk4prwgcfv6nih509q"; //cat = xok
$parts = str_split($original);

$output = "";
$message = "y2ssb dg ela213t! xybsb uyoro 3oro ubla.";

for($i=0; $i<strlen($message); $i++){
    //echo $message[$i];
    $character = $message[$i];
    $position = strpos($key,$character);
    //echo $character.$position."_";
    if($position !== false){
        $replacement = $original[$position];
    } else {
        $replacement = $character;
    }    
    $output = $output . $replacement;
}
echo $output;
