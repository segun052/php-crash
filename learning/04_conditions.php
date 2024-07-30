<?php
    $age = 25;
    $name = 'Segun';

    // if($age >= 18){
    //     echo "$name, You are old enough to vote.";
    // }else{
    //     echo "Sorry $name,  you are not old enough to vote";
    // }

    // $t = date("H");

    // if($t <12){
    //     echo 'Good Morning';
    // }elseif($t < 17){
    //     echo 'Good Afternoon';
    // } else{
    //     echo 'Good Evening';
    // }


    $posts = ['First Post'];
    // if(!empty($posts)){
    //     echo 'Not empty';
    // }else{
    //     echo 'No post';
    // }

    //echo !empty($posts) ? $posts[0] : 'No Posts';
    //echo !empty($posts) ? $posts[0] : null;

    // $firstPost = !empty($posts) ? $posts[0] : 'No Posts';
    // echo $firstPost;

    // $firstPost = $posts[0] ?? null;
    // echo $firstPost;

    //switches

    $favcolor = 'green';

    switch($favcolor){
        case 'red': 
            echo 'Your favourite color is red';
            break;
        case 'blue': 
            echo 'Your favourite color is blue';
            break;
        case 'yellow': 
            echo 'Your favourite color is yellow';
            break;
        case 'green': 
            echo 'Your favourite color is green';
            break;
        default:
            echo 'Your favorite color is not red, blue, yellow or green';
    }




?>