<?php

    //simple Array
    $numbers = [1, 44, 59, 68, 92];
    $fruits = array('mango', 'apple', 'orange');


    //print_r($numbers);
    //echo $fruits[1];

    //Associative Array, just like key value pairs and dictionary
    $colors = [
        1 => 'red',
        2 => 'blue',
        6 => 'green'
    ];
    //echo $colors[2];

    $hex = [
        'red' => '#f00',
        'blue' => '#0f0',
        'green' => '#00f'
    ];
    //echo $hex['blue'];


    $person = [
        'first_name' => 'Segun',
        'last_name' => 'Victor',
        'email' => 'segun@gmail.com'
    ];
    
    //echo $person['first_name'];
    

    $people = [
        [
            'first_name' => 'Segun',
            'last_name' => 'Victor',
            'email' => 'segun@gmail.com'
        ],
        [
            'first_name' => 'John',
            'last_name' => 'Damilola',
            'email' => 'john@gmail.com'
        ],
        [
            'first_name' => 'David',
            'last_name' => 'Aare',
            'email' => 'david@gmail.com'
        ]
    ];

    //echo $people[1]['last_name'];
    var_dump(json_encode($people));


?>
