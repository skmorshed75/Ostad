<?php
//encrypt.php
//21.02.23

$original = "abcdefghijklmnopqrstuvwxyz1234567890";
// /*KEY GENERATE--------------------------------------------------------*/
$key =      "o7x32ejyazusd1bm8ltk4prwgcfv6nih509q"; //cat = xok
// $parts = str_split($original);
// //print_r($parts);
// //var_dump($parts);
// shuffle($parts); //ultapalta kora
// //print_r($parts);
// $key = join('',$parts);
// print_r($key); //echo

//$message = "Hello my friends! Cholo Khawa dawa kori.";
/**END OF KEY GENERATE */

/**ENCRYPT STARTED HERE*/
$message = "Hello My friends! Cholo khawa dawa kori.";
//$message = "abcdef";
$message = strtolower($message);
$output='';

for($i=0; $i<strlen($message); $i++){
    //echo $message[$i];
    $character = $message[$i];
    $position = strpos($original, $character);
    //echo $character.$position." ";
    if($position !== false){
        $replacement = $key[$position];
    } else {
        $replacement = $character;
    }
    $output .= $replacement;
}
echo $output;

/**ENCRYPT ENDED HERE */