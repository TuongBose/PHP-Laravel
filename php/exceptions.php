<?php
echo "Exceptions in PHP";

function divide($a,$b){
    if(!$b){
        throw new Exception("Cannot divide by zero");
    }
    return $a/$b;
}
try{
    echo divide(10,2);
echo divide(5,0);
}catch(Exception $e){
echo "Caught exception: ". $e->getMessage();
}finally{
    echo "Finally runs here ...";
}
?>