<?php

//Problem: Calculate the area of a shape 

//Solution: 

function circleArea($radius) {
    return pi() * $radius**2; 
}

function rectangleArea($height, $width) {
    return $height * $width; 
}

function squareArea($side) {
    return $side**2;
}

$circle = circleArea(12); 
$rectangle = rectangleArea(15, 25); 
$square = squareArea(30); 

print($circle); 
echo "\n";
print($rectangle); 
echo "\n";
print($square);
?>