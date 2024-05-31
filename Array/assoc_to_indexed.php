<?php 
//if the keys of an associative array are integers, then it can be converted into an indexed array by using array_merge($arr). But using multiple arguments (arrays) will merge those and return a single array  
$arr = [
    4 => "Nahiyan",
    21 => "Rahat", 
    24 => "Ashfak", 
    46 => "Tanjil", 
    54 => "Tanjim", 
    60 => "Shovon"
]; 

print_r(array_merge($arr));

?>