<?php

// for ($x = 0; $x <= 10; $x++){
//     echo 'Number '.$x. '<br>'; 
// }


// $x = 1;
// while ($x <= 15){
//     echo 'Number '. $x . '<br>';
//     $x++;
// }

//Do while loop

// $x = 1;

// do {
//     echo 'Number  ' .$x. '<br>';
//     $x++;
// } while ($x <= 5);


//For each

// $posts = ['First Post', 'Second Post', 'Third Post'];

// for($x = 0; $x < count($posts); $x++){
//     echo $posts[$x];
// }

// foreach($posts as $post){
//     echo $post .'<br>';
// }

// foreach($posts as $index => $post){
//     echo $index . ' - ' . $post. '<br>';
// }

$person = [
    'first_name' => 'Segun',
    'last_name' => 'Victor',
    'email' => 'segun@gmail.com'
];

foreach($person as $key => $value){
    echo "$key - $value<br>";
}
 
?>