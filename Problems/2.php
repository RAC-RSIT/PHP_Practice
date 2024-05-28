

Remove all punctuation characters (.,?!:; etc.).
Convert the sentence to lowercase.
Replace all occurrences of the word "the" with "a".
Print the modified sentence.
Bonus: Count the number of words in the original and modified sentences and print the results.


<?php

//Problem: Write a PHP script that takes a user's sentence as input and performs the following:
// 1.Remove all punctuation characters (.,?!:; etc.).
// 2.Convert the sentence to lowercase.
// 3.Replace all occurrences of the word "the" with "a".
// 4.Remove the starting and training spaces 
// 5.Count and print total words in the message 
// 6.Print the modified sentence.

//Solution:

$input_message = strtolower(readline("Enter your message: ")); 

$modified_message = ""; 
for($i=0; $i<strlen($input_message); $i++) {
    $char = $input_message[$i];
    if(ctype_alnum($char) || ctype_space($char)) {
        $modified_message .= $char; 
    }
}

$modified_message = str_replace("the", "a", $modified_message); //replace all occurences of "the" with "a"

//trim the starting and trailing spaces
$modified_message = trim($modified_message);

//split the string by white spaces and keep it in an array 
$words = explode(" ", $modified_message); 

$word_count = count($words);

echo $modified_message . "\n";

echo $word_count;

?> 