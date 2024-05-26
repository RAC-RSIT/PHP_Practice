<?php 
    $x = 1987;
    $y = 19.87; 
    $z = "1987"; 
    $e = NAN; //Not A Number 

    echo "Checking if a number (true=>1) <br><br>";
    echo $x . " => " . is_numeric($x) . "<br>"; 
    echo $y . " => " . is_numeric($y) . "<br>";
    echo $z . " => " . is_numeric($z) . "<br>";
    echo $e . " => " . is_numeric($e) . "<br>";        
?> 