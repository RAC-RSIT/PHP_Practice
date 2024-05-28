<?php declare(strict_types=1);
    // by setting strict_types=1, we can switch to strict mode 
    function printScore(string $player, int $score) {
        echo "Player: " . $player . "<br>"; 
        echo "Score: "; 
        print($score); 
    }
    // if we pass '245' instead of 245 then it will not throw an error. Because it expects variable of only the defined data type 
    printScore("Ninja_bd007", 245); 
?>