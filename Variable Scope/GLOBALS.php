<?php 


$name = "Shakib Al Hasan";
$age = 38;

function print_info() {
    $x = $GLOBALS['name'];
    $y = $GLOBALS['age'];
    echo "<p>name: $x </p>"; // it will print the name 
    echo "<p>age: $y </p>";  // it will print the age 
}

print_info();

echo "<p>name (outside the function): $name </p>"; // it will print the name because this is the global scope 

?>