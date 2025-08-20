<?php
echo "We talk about conditional in PHP";

function sayHello($name)
{
    echo "hell $name";
}
sayHello("Tuong");  // hello Tuong

$y = 22;
function sayHello1($name)
{ // function with "arguments"
    echo "y = $y";
    echo "hell $name";
} // => exception, variable y cannot in function
sayHello1("Tuong"); // call function with "parameters"

function sayHello2($name)
{ // function with "arguments"
    global $y;
    echo "y = $y";
    echo "hell $name";
}
sayHello2("Tuong"); // call function with "parameters"

function sum($a, $b)
{
    return $a + $b;
}
echo sum(1, 2); //3

function sum1($a, $b)
{
    return $a + $b;
}
//echo sum1(); // => exception

function sum2($a = 0, $b = 0)
{ // defined a and b equal 0
    return $a + $b;
}
echo sum2(); // 0, NOT EXCEPTION
echo sum2(2, 3); //5

// assign a variable to a function
$multiply = function ($a, $b) {
    return $a * $b;
};
echo $multiply(3, 4); //12

//arrow function
$substract = fn($a, $b) => $a - $b;
echo $substract(6, 3); //3

// some built-in function for array
$names = ['tuong', 'vu', 'mai', 'an', 'hue', 'bao'];
echo "number of items: " . count($names); //6

//search inside array
var_dump(in_array('elon', $names)); //bool(false)
var_dump(in_array('tuong', $names)); //bool(true)

// insert an item
array_push($names, 'alo', 'tom');
print_r($names);

//insert to the beginning of the array
array_unshift($names, 'hihi');
print_r($names);

// remove the last item
array_pop($names);
print_r($names);

// remove the first item
array_shift($names);
print_r($names);

// how to remove an item
unset($names[3]);
print_r($names);

// chunk an array
$chunked_array = array_chunk($names, 2);
print_r($chunked_array);

$array_one = [1, 3, 5];
$array_two = [2, 4, 6];
$merged_array = array_merge($array_one, $array_two);
print_r($merged_array);

//spread operator
$array_three = [...$merged_array]; //clone an array
print_r($array_three); // giong với merged_array

$array_three = [...$merged_array]; //clone an array
$merged_array[0] = 111;
print_r($merged_array); // bị thay đổi
print_r($array_three); // vì đã sao chép trước khi đổi nên vẫn như cũ

$array_four = [...$array_one, ...$array_two]; // làm cách này thì giống array_merge();
print_r($array_four);

//combine two arrays
$a = ['name', 'email', 'age'];
$b = ['Tuong', 'tuong@gmail.com', 18];
$c = array_combine($a, $b);
print_r($c);
print_r(array_keys($c)); // lấy phần key, không lấy phần value, nên kết quả sẽ ra được mảng a
print_r(array_values($c)); // lấy phần value, không lấy phần key, nên kết quả sẽ ra được mảng b
print_r(array_flip($c)); // đảo ngược key và value, key sẽ là value và value sẽ là key

// array from a range
$numbers = range(1, 10); // mảng từ 1 đến 10
print_r($numbers);

// map an array to another array
// with the same size, but other values
$squared_numbers = array_map(function ($each_number) {
    return $each_number * $each_number;
}, $numbers);
print_r($squared_numbers);
// or
$squared_numbers = array_map(
    fn($each_number) =>
    $each_number * $each_number,
    $numbers
);
print_r($squared_numbers);

// filter an array
$filtered_numbers = array_filter($numbers, fn($each_number) => $each_number % 2 == 0);
print_r($filtered_numbers);

?>