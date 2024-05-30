<?php

//the number of elements in each arrays should be equal 
$names = ["Tonmoy", "Kabir", "Shawon", "Raju", "Ashfak", "Siam"]; 
$ages = [25, 22, 31, 29, 28, 17]; 

$info = array_combine($names, $ages); 

print_r($info);

?>