<?php
function sum($a,$b){
    $c=$b+$a;
    return $c;
}
$add=sum(7,5);
echo"parameter passed is 7 <br>";
echo"parameter passed is 5 <br>";
echo "function with parameter addition". $add."<br>";
echo"<br>";

function strAndNum($name){
    $name="gond shailesh".$name."<br>";
    return $name;
}

$fname =strAndNum("is my name ,..........gond shailesh value is returning from a strAndNum function");
echo $fname;
echo"<br>";





?>