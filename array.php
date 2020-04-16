<?php
// Arrays
// associative array
/*$a = array(
    "sourav" => 32,
    "priyanka" => 31,
    "sagorika" => 29
);
echo "<pre>";
// print_r($a);
var_dump($a);
echo "</pre>";
// echo "<br>"

// echo $a["priyanka"];
// we can simply use square brackets 
$age = [
    "sourav" => 28,
    "priyanka" => 25,
    "sagorika" => 24
];

// echo $age["sourav"];
// print_r($age);
*/

// foreach loop
// $color = ["red","blue","green","yellow"];
// foreach($color as $value){
//     echo $value."<br>";
// };
$emp = [
    [1,"Sourav","Manager",50000],
    [2,"Priyanka","Front desk",40000],
    [3,"Abhishek","Mechanical",35000],
    [4,"Ansuman","Software Engg",55000]
];
// echo "<pre>";
// print_r($emp);
// echo "</pre>";

// echo $emp[0][3];
/*for($a =0; $a < 4; $a++){
    for($b = 0; $b < 4; $b++){
        echo $emp[$a][$b]." ";
    }
    echo "<br>";
}*/

// foreach => In Arrays foreach loop will be the best
// applying html table
echo "<table border = '2px solid red' cellspacing = '0px' cellpadding = '5px'>";
echo "<tr>
            <th>Emp Id</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Salary</th>
    </tr>";
foreach($emp as $val){
    echo "<tr>";
    foreach($val as $val1){
        echo "<td> $val1 </td>";
    }
    echo "</tr>";
};
echo "</table>";
?>