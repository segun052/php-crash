<?php

    $fruits = ['apple', 'orange', 'pear'];

    //get the length of a n array
    // echo count($fruits);

    // //search array
    // $fruitIn = in_array('apple', $fruits);
    // echo $fruitIn . '<br>';

    // var_dump(in_array('pepper', $fruits));

    //add to an array
    // $fruits[] = 'grape';
    // array_push($fruits, 'blueberry', 'banana');
    // array_unshift($fruits, 'raspberry', 'strawberry');

    // print_r($fruits);


    //remove from an array
    // array_pop($fruits);
    // array_shift($fruits);
    // unset($fruits[3]); 
    // print_r($fruits);

    //split an array into two
    // $chunked_array = array_chunk($fruits, 3);
    // print_r($chunked_array);

    //concatenate arrays
    // $arr1 = [1, 2, 3];
    // $arr2 = [4, 5, 6];

    // $arr3 = array_merge($arr1, $arr2);
    // $arr4 = [...$arr1,  ...$arr2];

    // print_r($arr4);

    //combine arrays. turmns the array into key value pair
    // $a  = ['green', 'red', 'yellow'];
    // $b = ['avacado', 'apple', 'banana'];

    // $c = array_combine($a, $b);

    // print_r($c)


    // get the keys alone
    // $keys = array_keys($c);
    // print_r($keys);

    // flip the array
    // $flipped = array_flip($c);
    // print_r($flipped);

    //an array with a range of numbers
    $numbers = range(1, 20);
    // print_r($numbers);

    // mapping the array
    $newNumbers = array_map(function($number){
        return "Number ${number}";
    }, $numbers);
    print_r($newNumbers);

    //striping out the array i.e. filtering the array
    $lessThan10 = array_filter($numbers, fn($number) =>
    $number <= 10);

    print_r($lessThan10);

    //reduce; this example gives the sum of all the values reducing it from an array to an integer
    $sum = array_reduce($numbers, fn($carry, $number) => 
    $carry + $number);
    var_dump($sum);
    print($sum);
     




?>