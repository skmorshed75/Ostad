<?php
//assignment_module4.php

//ASSIGNMENT MODULE 04
// Date : 20.02.2023
// Sheikh Mohammed Morshed


/*1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)
-----------------------------------------------------------------------------------------------------*/

function sort_strings_by_length(array $strings): array {
  usort($strings, function($a, $b) {
    return strlen($a) - strlen($b);
  });
  return $strings;
}

$strings = array("apple", "banana", "cherry", "date");
$sorted = sort_strings_by_length($strings);
echo "1. The sorted array of strings by their length is : ";
print_r($sorted);



/*
2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
-----------------------------------------------------------------------------------------------------*/

function concat_reverse($str1, $str2) {
  return $str1 . strrev($str2);
}

$str1 = "Hello";
$str2 = "world";
$result = concat_reverse($str1, $str2);

echo "2. Concatenate two things is : {$result}"; // outputs "Hellodlrow"
echo PHP_EOL;


/*
3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
--------------------------------------------------------------------------------------------------*/

function remove_first_last(array $arr): array {
  array_shift($arr); // remove first element
  array_pop($arr); // remove last element
  return $arr;
}

$arr = array(1, 2, 3, 4, 5);
$new_arr = remove_first_last($arr);
echo "3. Remaining array except first & last element is : ";
print_r($new_arr); // outputs Array ( [0] => 2 [1] => 3 [2] => 4 )
echo PHP_EOL;


/*
4.Write a PHP function to check if a string contains only letters and whitespace.
--------------------------------------------------------------------------------*/

function is_letters_and_whitespace(string $str): bool {
  return preg_match('/^[A-Za-z\s]+$/', $str);
}

$str1 = "Hello world";
$str2 = "Hello 46546123";

if (is_letters_and_whitespace($str1)) {
  echo "4. String 1 is valid\n";
}

if (is_letters_and_whitespace($str2)) {
  echo "4. String 2 is valid\n";
}


/*
5.Write a PHP function to find the second largest number in an array of numbers.
--------------------------------------------------------------------------------*/

function second_largest(array $arr): int {
  $largest = $arr[0];
  $second_largest = null;
  
  for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i] > $largest) {
      $second_largest = $largest;
      $largest = $arr[$i];
    } elseif ($arr[$i] != $largest && ($second_largest === null || $arr[$i] > $second_largest)) {
      $second_largest = $arr[$i];
    }
  }
  
  return $second_largest;
}

$arr = array(1, 3, 2, 9, 12, 15, 5, 4);
$second_largest = second_largest($arr);
echo "5. The Second Largest number of Array is : {$second_largest}"; // outputs 12



/* Note : ---------------------------------------------------------------------------------------------
To complete the assignment, create a PHP file and write the code for each of the above functions. You should also include example usage for each function, to show that it is working correctly.
-----------------------------------------------------------------------------------------------------*/
