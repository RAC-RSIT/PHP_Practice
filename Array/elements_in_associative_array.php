<?php

$bikes = [
    [
        "model" => "Avenger 160 street",
        "brand" => "Bajaj",
        "cc" => 160,
        "price" => 274000,
        "is_available" => "not available" 
    ],
    [
        "model" => "XBlade",
        "brand" => "Honda",
        "cc" => 165,
        "price" => 208000,
        "is_available" => "available" 
    ],
    [
        "model" => "Gixxer monotone",
        "brand" => "Suzuki",
        "cc" => 160,
        "price" => 195000,
        "is_available" => "available" 
    ]
]; 

foreach($bikes as $bike) {
    foreach($bike as $key => $value) {
        echo $key . " : " . $value . "\n"; 
    }
    echo "\n";
}

?>