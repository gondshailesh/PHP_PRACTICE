<?php
$marks=[
    "krishna"=>["physics"=>45,"maths"=>61,"chemestry"=>90],
    "mohan"=>["physics"=>53,"maths"=>22,"chemestry"=>20],
    "shailesh"=>["physics"=>55,"maths"=>64,"chemestry"=>70],
    "nagesh"=>["physics"=>57,"maths"=>88,"chemestry"=>50],
];
echo"<pre>";
    print_r($marks);
    echo"<pre>";
echo"<table border='5px' cellpadding='5px' cellspacing='3px'><tr>
        <th>student name</th>
        <th>student name</th>
        <th>student name</th>
        <th>student name</th>
    </tr>";

    foreach($marks as $key=>$val1){
        echo"<tr>
        <td> $key</td>";
        foreach($val1 as $val2){
            echo"<td>$val2</td>";
        }
        
    }

