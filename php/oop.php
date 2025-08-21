<?php
echo "OOP - Object Oriented Programming in PHP";

// From PHP5 onwards, you can define classes
class User{
    // properties tha belong to a class
    public $name;
    public $email;
    public $age;
    public $password;
    // constructor: function that runs when an object is instantiated
    public function __construct($name, $email, $age, $password) {
        echo "constructor run<br>";
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->password = $password;
    }
    // method: a function that belongs to a class
    // setter
    function set_name($name){
        $this->name=$name;
    }

    // getter
    function get_name(){return $this->name;}
}

//init an object
$user1 = new User('tuong','tuong@gmail.com',18,'123');
$user2 = new User('jhon','jhon@gmail.com',20,'456');
print_r($user1);
// Có thể gán giá trị trực tiếp như vậy được nếu các trường trong class để public
// Nếu không phải sử dụng các method getter và setter
// $user1->name='Tuong';
// $user1->email='tuong@gmail.com';
// $user1->age=18;
// $user1->password='123';
// $user1->set_name('TuongLe');
// print_r($user1);
// $user2->set_name('TuongBose');
// print_r($user2);

echo $user1->get_name()."<br>";
echo $user1->email."<br>";
echo $user2->get_name()."<br>";
echo $user2->email."<br>";

//inheritance
class Employee extends User {
    private $title;
    
    public function __construct($name, $email, $age, $password
    , $title // only employee has title
    ) {
        parent::__construct($name, $email, $age, $password); // call parent constructor
        $this->title=$title;
    }
    public function get_title(){
        return $this->title;
    }
}

$employee1 = new Employee('Taylor','taylor@gmail.com',30,'123','sale manager');
echo    $employee1->get_title();
?>