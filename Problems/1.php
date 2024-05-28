<?php

//Problem: Write a PHP script that takes a user's name as input and outputs a greeting message in all uppercase letters. Additionally, count the number of vowels (a, e, i, o, u) in their name (case-insensitive).

//Solution:

$name = strtoupper(readline('Enter your name: '));  //taking the input in any case and then converting it to all uppercase 

echo "HELLO " . $name . "! WELCOME TO THE COMPANY" . "\n"; 

// counting the vowels 
$vowels_count = 0; 
for($i=0; $i<strlen($name); $i++) {
    if($name[$i] == "A" or $name[$i] == "E" or $name[$i] == "I" or $name[$i] == "O" or $name[$i] == "U") {
        $vowels_count++; 
    }
}

echo "vowels: " . $vowels_count;
?> 
