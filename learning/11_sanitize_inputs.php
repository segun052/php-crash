<?php


if(isset($_POST['submit'])){
    // $name = htmlspecialchars($_POST['name']);
    // $age = htmlspecialchars($_POST['age']);
    // echo $name;
    // echo $age;

    // $name = filter_input(INPUT_POST, 'name', 
    // FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, 'age', 
    // FILTER_SANITIZE_SPECIAL_CHARS);

    
}
?>


<form action="<?php echo $_server['PHP_SELF']; ?>"
method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>