<?php 

    function isEven($num){
        if($num%2===0){
            return "Even"; 
        }
        else {
            return "Odd"; 
        }
    };

    // getting the number from input.html form  
    $number = $_POST["number"]; 

    echo isEven($number);

?>