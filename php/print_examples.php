<!-- http://localhost:8080/print_examples.php -->
 
<?php 
    // echo "toi la manh tuong";
    // echo "PI = ",3.14;
    // echo "PI = ",3.14, ", x = ", 3;
    print "hello";
    print_r(["John","Tuong","Tony"]);
    var_dump(false);
    var_export('hello'); // Donot print data's type
?>

<!-- Nhung PHP vo html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><? echo 'hello'?></h1>
    <h1><?='this is me'?></h1>
</body>
</html>