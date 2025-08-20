<?php
echo "String function in PHP";

$full_name = "Le Manh Tuong";
echo "length: " . strlen($full_name);

// reverse a string
echo strrev($full_name);

// convert to lowercase
echo strtolower($full_name);

// convert to uppercase
echo strtoupper($full_name);

// find and replace
echo str_replace(' ','-',$full_name); // Le-Manh-Tuong

// Kiểm tra chuỗi bắt đầu bằng chữ '...'
if(str_starts_with($full_name,'Le')){
    echo "his name starts with Le";
}
else{
    echo "his name don't starts with Le";
}

// Kiểm tra chuỗi kết thúc bằng chữ '...'
if(str_ends_with($full_name,'Tuong')){
    echo "his name ends with Tuong";
}
else{
    echo "his name don't ends with Tuong";
}

echo "<h1>html</h1>";
// how to ignore the html tag?
echo htmlspecialchars("<h1>html</h1>"); // => <h1>html</h1>

echo "<script>alert('This is javascript code')</script>";
// how to ignore the script tag?
echo htmlspecialchars("<script>alert('This is javascript code')</script>");

printf("%s likes %s","Tuong","Audi"); // Tuong likes Audi
printf('pi = %f', 3.14); //pi = 3.140000
?>