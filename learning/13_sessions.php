<?php

session_start();

if(isset($_POST['submit'])){
    // $name = htmlspecialchars($_POST['name']);
    // echo $name;


    $username = filter_input(INPUT_POST, 'username', 
    FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST['password'];

    if($username == 'James' && $password == 'password'){
        $_SESSION['username'] = $username;
        header('Location: /php-crash/extras/dashboard.php');
    }else{
        echo 'Incorrect Login';
    }
}
?>


<form action="<?php echo $_server['PHP_SELF']; ?>"
method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>


