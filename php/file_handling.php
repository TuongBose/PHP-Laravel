<?php
echo "File handling in PHP";

// read / write file on server
$file_path ='./fruits.txt';
if(file_exists($file_path)){
    echo readfile($file_path); // 34 - number of bytes of the file
    $file_handle=fopen($file_path,'r');
    $file_content=fread($file_handle,filesize($file_path));
    fclose($file_handle);
    echo $file_content;
}
else{
    // no exist
    $file_handle=fopen($file_path,'w'); // open for write
    $file_content='banana'.PHP_EOL.'mango'.PHP_EOL.'ahaha';
    fwrite($file_handle,$file_content);
    fclose($file_handle);
}
?>