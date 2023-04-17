/*
MODULE - 11
Submitted by : Sheikh Mohammed Morshed

ASSIGNMENT :
------------
Question : Write a program that generates a multiplication table for a given number using a for loop.

Instructions:
Create a JavaScript function called "multiplicationTable" that takes a single argument "num" (an integer) as input.

Inside the function, create a for loop that iterates from 1 to 10.

Inside the loop, multiply the current iteration number by the input "num" to generate the product.

Log the product to the console in the format "num x iteration = product".

Test the function with different input numbers to generate multiplication tables.

SOLUTION :
----------
*/

function multiplicationTable(num) {
    for (let i = 1; i <= 10; i++) {
      const product = num * i;
      console.log(`${num} x ${i} = ${product}`);
    }
  }
  console.log("Multiplication Result is :")
  multiplicationTable(10);