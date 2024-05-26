<?php 
    $country = "Bangladesh";
    echo "<p><b>Initial:</b> $country</p>"; 
    
    //make all characters uppercase
    $country = strtoupper($country);
    echo "<p><b>All capital:</b> $country</p>"; 

    //make all characters lowercase 
    $country = strtolower($country);
    echo "<p><b>All small:</b> $country</p>";

    //reverse the string 
    $rev_country = strrev($country);
    echo "<p><b>Reversed string:</b> $rev_country</p>";

    //remove white spaces from beginning and end of string 
    $greeting = " Hello Mr.Martin!   "; 
    $trimmed_greeting = trim($greeting); 
    echo "<p><b>Actual: </b> $greeting | <b>Trimmed: </b>$trimmed_greeting</p>";

    
?>