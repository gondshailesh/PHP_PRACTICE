<?php
$emp =[
    [1,"mahesh","player",45000],
    [2,"shivraj","friend",250000],
    [3,"nagesn","helper",50000],
    [4,"Gond","manager",65000],
    [5,"shailesh","emp",443000]
];

foreach($emp as $val1){
    foreach($val1 as $val2){
        
    }
}


for($row=0; $row<=4;$row++){
    for($col=0; $col<4;$col++){
        echo$emp[$row][$col]." ";
    }
    echo"<br>";
}

echo"<pre>";
print_r($emp);
echo"</pre>";  
?>