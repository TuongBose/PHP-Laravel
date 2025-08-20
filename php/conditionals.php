<?php
echo "We talk about conditional in PHP";

$age = 30;
if ($age > 18) {
    echo "You are greater than or equal to 18 years";
} else {
    echo "You are so young";
}

$date_time = date("F j"); // August: Hiện tháng bằng chữ
$date_time = date("F j"); // August 19
$date_time = date("H"); // 11: UTC0
echo $date_time;

$hours = date("H");
if ($hours < 12) {
    echo "Good morning";
} else if ($hours >= 12 && $hours <= 17) {
    echo "Good afternoon";
} else {
    echo "Good evening";
}

$comments = ['Good', 'I like it', 'How are you?'];
if (!empty($comments)) { // not = !
    echo "there are some comments";
} else {
    echo "no comments";
}

echo !empty($comments) ? "There are some comment" : "no comments";
$first_comment = !empty($comments) ? $comments[0] : "no comments"; // Good

// coalescing  operator
$first_comment = $comments[0] ?? "no comment"; // Good
echo $first_comment;

$favorite_color = 'red';
switch ($favorite_color) {
    case 'red':
        echo "you choose RED";
        break;
    case 'green':
        echo "you choose GREEN";
        break;
    case 'blue':
        echo "you choose BLUE";
        break;
    default:
        echo "not BLUE, RED, GREEN";
}

?>