<?php
    // ability to read and write file on the server


    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $file = 'extras/users.txt';

    if(file_exists($file)){
        // echo readfile($file);
        $handle = fopen($file, 'r');
        $contents = fread($handle, filesize($file));
        fclose($handle);
        echo $contents;
    } else {
        $handle = fopen($file, 'w');
        $contents = 'Segun' . PHP_EOL . 'Tolu' . PHP_EOL . 'Jack';
        fwrite($handle, $contents);
        fclose($handle);
    }

    

?>