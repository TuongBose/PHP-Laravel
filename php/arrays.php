<!-- http://localhost:8080/arrays.php -->

<?php
echo "Cơ bản về mảng trong PHP (array)" . '<br>';
$some_numbers = [1, 3, 4, 6];
var_dump($some_numbers);

$fruits = array('apple', 'melon', 'pineapple');
print_r($fruits);
echo $fruits[0]; // apple

//associactive array
$color = [
    4 => 'red',
    6 => 'white',
    2 => 'gray',
];
echo $color[2]; // gray

// key as string
$hex_colors = [
    'red' => '#FF0000',
    'green' => '#00FF00',
    'blue' => '#0000FF',
];
echo   $hex_colors['red']; // #FF0000

$person = [
    'full_name' => 'Le Manh Tuong',
    'age' => 18,
    'email' => 'tuong@gmail.com',
];
print_r($person);
echo $person['age']; // 18

$persons=[
    [
    'full_name' => 'Le Manh Tung',
    'age' => 18,
    'email' => 'mot@gmail.com',
    ],
    [
    'full_name' => 'Le Manh Hai',
    'age' => 32,
    'email' => 'hai@gmail.com',
    ],
    [
    'full_name' => 'Le Manh Ba',
    'age' => 44,
    'email' => 'ba@gmail.com',
    ],
];
print_r($persons);
echo $persons[1]['full_name']; // Le Manh Hai
echo $persons[2]['email']; // ba@gmail.com
var_dump(json_encode($persons)); // Chuyển sang dạng chuẩn json


?>