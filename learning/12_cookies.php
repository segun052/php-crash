<?php
    //Set Cookie
    setCookie('name', 'Segun', time() + 86400 * 30);

    if(isset($_COOKIE['name'])){
        echo $_COOKIE['name'];
    }

    setCookie('name', '', time() - 86400);

?>