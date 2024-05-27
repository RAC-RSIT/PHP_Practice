<?php
    function sum(...$numbers) {
        $total = 0; 
        $length = count($numbers);
        for($i = 0; $i < $length; $i++) {
            $total += $numbers[$i]; 
        }
        return $total;
    }
    $total = sum(5,10,2,6,7,12,19,31,8);
    print($total);
?>