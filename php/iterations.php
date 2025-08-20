<?php
echo "We talk about iterations(LOOP) in PHP";
for ($i = 5; $i <= 10; $i++) {
    echo $i;
}

for ($i = 5; $i <= 10; $i++) {
    echo " i = $i";
}

for ($i = 5; $i <= 10; $i++) {
    echo " i = $i <br>";
}

$i = 0;
while ($i < 20) {
    echo "i=$i<br>";
    // never ending
    $i++; // or $i = $i + 1;
}

// do while = "do first, then check"
$y = 0;
do {
    echo "y = $y<br>";
    $y++;
} while ($y < 30);

// foreach
$fruits=['apple','banana','watermelon'];
for($i=0;$i<count($fruits);$i++){
    echo "$fruits[$i]<br>";
}

foreach($fruits as $fruit){
    echo "$fruit<br>";
}

// add index
foreach($fruits as$index =>$fruit){
    echo "$index - $fruit<br>";
}
/*
0 - apple
1 - banana
2 - watermelon
*/

$person = [
    'full_name' => 'Le Manh Tuong',
    'age' => 18,
    'email' => 'tuong@gmail.com',
];
foreach($person as $key =>$value){
    echo "$key : $value<br>";
}

?>