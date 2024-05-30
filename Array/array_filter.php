<?php

function check_age($age) {
    if($age >= 25) {
        return $age;
    }
}

$ages = [25, 22, 31, 29, 28, 17]; 

$res = array_filter($ages, "check_age"); 

print_r($res);

?>