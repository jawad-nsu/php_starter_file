<?php

    $y = 12;
    function registeredUser() {
    global $y;
    $x = 5;
    echo $y;
    }

    // registeredUser();

    $sum = function($x, $y){
        return $x + $y;
    };

    // echo $sum(1,5);

    $mulitply = fn($x,$y) => $x * $y;

    echo $mulitply(2,3);

?>