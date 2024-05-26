<?php 

    //substr() doesn't modify the actual string   

    $message = "Hello World!"; 
    echo "<p>$message</p>"; 

    //slice to the end 
    echo substr($message, 6); 

    echo "<p></p>"; //just to add some space and line break  

    //slice from the end 
    echo substr($message, -5); 

    echo "<p></p>"; //just to add some space and line break  

    //slice from the end upto n characters
    echo substr($message, -5, 3); 
?> 