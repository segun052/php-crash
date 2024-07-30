<?php

function registerUser($email){
    echo $email . ' registered' .'<br>';
    //echo 'User registered';
}

// registerUser('Segun')

// function sum($n1, $n2){
//     return $n1 + $n2;
// }

// $number = sum(5, 5);
// echo $number . '<br>';


// function sum($n1 = 4, $n2 = 5){
//     return $n1 + $n2;
// }
// echo sum();

// $subtract = function($n1, $n2){
//     return $n1 - $n2;
// };

// echo $subtract(10, 5);

$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(7, 7);


?> 