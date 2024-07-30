<?php

$string = 'Hello World';

//length of a string
echo strlen($string). '<br>';


//position of the first occurence
echo strpos($string, 'o'). '<br>';

//position of the last occurence
echo strrpos($string, 'o'). '<br>';

//Reverse a string
echo strrev($string). '<br>';

//convert all characters to lowercase
echo strtolower($string). '<br>';

//convert all characters to uppercase
echo strtoupper($string). '<br>';

//uppercase the first letter
echo ucwords($string). '<br>';

//String replace
echo str_replace('World', 'Everyone', $string) . '<br>';

// return the position of a string specified by the offset and lenght
echo substr($string, 0, 5);
echo substr($string, 5);

//starts with
if(str_starts_with($string, 'Hello')){
    echo 'Yes';
}

// Ends with
if(str_ends_with($string, 'ld')){
    echo 'Yes';
}

//HTML entities

$string2 = '<script>alert(2)</script>';
echo htmlspecialchars($string2);

printf('%s likes to %s', 'Segun', 'code');
printf('1+1=%f', 1+1);














?>