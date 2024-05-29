<?php

//Problem: Write a PHP script that demonstrates the difference between local and global variables

//Solution: 

$globalVar = "This is global variable"; 

function modifyVariables() {
    $localVar = "This is local variable"; 
    global $globalVar; 
    $globalVar = "Global variable modified"; 
    $localVar = "Local variable modified"; 
    
    echo "Before modification: \n"; 
    echo "Local = " . $localVar . "\n"; 
    echo "Global = " . $globalVar . "\n"; 
}

modifyVariables(); 

echo "After modification: \n"; 
echo "Local = " . $localVar . "\n"; 
echo "Global = " . $globalVar . "\n"; 
?>