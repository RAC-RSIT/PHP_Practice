<?php 
    $car_brands = array();

    array_push($car_brands, "Ford");
    array_push($car_brands, "BMW");
    array_push($car_brands, "Toyota");

    foreach($car_brands as $brand){
        echo "<pre>$brand</pre>";
    } 
?>