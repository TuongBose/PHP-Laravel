<!-- http://localhost:8080/variables.php -->

<?php
    echo "Cơ bản về biến trong PHP (variables)" . '<br>';
    $name = 'Tuong'; //string
    $age = 18; // integer
    $has_car = true;
    $has_hourse = false;
    echo $name;
    echo $age;
    echo $has_hourse; // false don't display
    echo $has_car; // true => 1
    // ==> Tuong181

    var_dump($has_hourse);
    $product_price = 22.45;
    var_dump($product_price);
    echo "<br>";

    // string concatenation
    echo $name . ' is ' . $age . ' years old' . "<br>"; // Tuong is 18 year old (use dot)
    // this is better
    echo "$name is $age years old";
    // or
    echo "${name} is ${age} years old";

    //expression
    echo 5+5; // 10
    echo '1'+'3'; // 4
    $sum = '2'+'3';
    var_dump($sum);

    echo 5*5; //25
    echo 10/2; // 5
    //echo 5/0; // exception divison by zero
    echo 10%3; //remains => 1

    // constants
    define('SERVER_NAME','localhost');
    define('DATABASE_NAME','test_db');
    echo "server: ".SERVER_NAME.", db: ".DATABASE_NAME;
?>