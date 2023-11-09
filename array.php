<?php


$colors=["red",44,"blue,14.55",44,"shailesh"];
// echo$colors[0]."<br>";
// echo$colors[1]."<br>";
// echo$colors[2]."<br>";
// echo$colors[3]."<br>";
// echo$colors[4]."<br>";
echo"<pre>";
print_r($colors);
echo"<pre>";
echo"<br>";

for ($i=0; $i<=4;$i++){
    echo $colors[$i]."<br>";
}
?>