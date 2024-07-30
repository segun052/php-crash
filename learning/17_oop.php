<?php

    // for classes, we have public, private and protected
    class User{
        //Properties are attributre that belong to a class.
        public $name;
        public $email;
        public $password;

        //A constructor is a metho that runs when an object is created
        public function __construct($name, $email, $password){
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }

        // Method is a function that belongs to a class
        function set_name($name){
            $this->name = $name;
        }

        function get_name(){
            return $this->name;
        }
    }

    //Instanciate a user object

    $user1 = new User('Segun', 'segun@gmail.com', '112233');
    $user2 = new User('Tolu', 'tolu@gmail.com', '112244');
    
    // echo $user1->email;
    // echo $user2->name;

    // $user1->set_name('Segun');
    // $user2->set_name('Tolu');

    // echo $user1->get_name();
    // echo $user2->get_name();

    // var_dump($user2);

    //Inheritance
    class Employee extends User{
        public function __construct($name, $email, $password, $title){
            parent:: __construct($name, $email, $password);
            $this->title = $title;

        }
        public function get_title(){
            return $this->title;
        }
    }

    $employee1 = new Employee('Shade', 'shade@gmail.com', '113322', 'Manager');
    echo $employee1->get_title();


?>