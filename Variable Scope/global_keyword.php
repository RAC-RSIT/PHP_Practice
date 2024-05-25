<?php 


$name = "Moeen Ali";
$age = 35;

function print_info() {
    global $name, $age; // getting the variables from global scope 
    echo "<p>name: $name </p>"; // it will print the name 
    echo "<p>age: $age </p>";  // it will print the age 
}

print_info();

echo "<p>name (outside the function): $name </p>"; // it will print the name because this is the global scope 

?>