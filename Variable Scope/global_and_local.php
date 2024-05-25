<?php 

// variables declared in global scope can be accessed from the global scope only, not from any local scope  
// variables declared in local scope can be accessed from inside the function or the local scope only 


$name = "Shagor";  // $name is declared globally

function print_info() {
    $age = 31; //age is declared locally 
    // we can not directly get the $name inside the function
    echo "<p>age: $age </p>";  // it will print the age 
}

print_info();

echo "<p>name (outside the function): $name </p>"; // it will print the name because this is the global scope 

?>