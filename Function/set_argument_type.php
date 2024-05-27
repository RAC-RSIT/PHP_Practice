<?php
    // we can set the data type of the argument but as it is not in the strict mode, we can pass values of different data types and it will be automatically type casted
    function printScore(string $player, int $score) {
        echo "Player: " . $player . "<br>"; 
        echo "Score: "; 
        print($score); 
    }
    // if we pass '245' instead of 245 then it will not throw error, it will convert '245' to integer 
    printScore("Ninja_bd007", 245); 
?>