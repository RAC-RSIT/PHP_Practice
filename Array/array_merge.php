<?php
$arr1 = ["tanjil" => "gixxer", "rahat"=>"avenger"]; 
$arr2 = ["tanjim" => "glamour", "rahat"=>"metro"]; 

$arr3 = array_merge($arr1, $arr2) ; //this will override the value of the same key to the latest value. here, [rahat] => "metro" because this is the latest value of the key "rahat"
$arr4 = array_merge_recursive($arr1, $arr2); //this will keep all values of the same key in an array. here, [rahat] => Array([0]=>"avenger" [1]=>"metro") 

print_r($arr3); 
echo("\n"); 
print_r($arr4);
?>