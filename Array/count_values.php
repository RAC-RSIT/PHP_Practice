<?php

$countries = [
    "Solomon" => "Switzerland", 
    "Smith" => "Australia", 
    "Jenny" => "England", 
    "Saimon" => "England", 
    "Cameron" => "USA", 
    "Umar" => "UAE", 
    "Satoshi" => "Japan",
    "Muhammad" => "KSA",
    "Naomi" => "Japan"
]; 

$count_occ = array_count_values($countries); 

print_r($count_occ);
?>