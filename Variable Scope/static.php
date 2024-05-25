<?php
    // usually variables declared inside a function are deleted after the execution of the function 
    // by using the static keyword we can keep the variable 

    function myTest() {
        static $x = 0; // $x will not be deleted 
        echo "$x <br>"; 
        $x++;
    }

    myTest(); // output: 0
    myTest(); // output: 1
    myTest(); // output: 2 
?> 