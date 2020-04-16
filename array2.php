<?php
// Multidimensional Associative array
// Foreach Loop with List 
$emp = [
    [1,"Sourav","Manager",50000],
    [2,"Priyanka","Front desk",40000],
    [3,"Abhishek","Mechanical",35000],
    [4,"Ansuman","Software Engg",55000]
];

echo "<table border = '2px' cellpadding = '5px'>";
echo "<tr>
        <th>Emp id</th>
        <th>Emp Name</th>
        <th>Designation</th>
        <th>Salary</th>
    </tr>";
foreach($emp as list($id, $name, $designation, $salary)){
    echo "<tr>
            <td>$id</td>
            <td>$name</td>
            <td>$designation</td>
            <td>$salary</td>
        </tr>";
}
echo "</table>";

?>