
<?php
//Live Test : Date 19.02.2023
//Sheikh Mohammed Morshed

/*Write a PHP function to find the longest word in a string
$str ="The quick brown fox jumped over the lazy dog"
echo longestWord($str);
Output:jumped
*/

function longestWord($str) {
    // Split the string into an array of words
    $words = explode(" ", $str);
    
    // Initialize the longest word to an empty string
    $longest_word = "";
    
    // Loop through the array of words
    foreach ($words as $word) {
        // If the current word is longer than the current longest word, update the longest word
        if (strlen($word) > strlen($longest_word)) {
            $longest_word = $word;
        }
    }


    // Return the longest word found
    return $longest_word;
}
$str ="The quick brown fox jumped over the lazy dog";

echo longestWord($str);


$fruits = array("xxxxx","apple","banaa");
//echo array_shift($fruits);
//echo count($fruits);
echo implode(",",$fruits);