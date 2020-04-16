<?php
/*Functions in php.
syntax:
function functionName(){
    statements;
}

function call:
functionName();
*/

/*function hello(){
    echo "My name is Sourav Dutta. <br>";
    echo "I am from Kolkata.  <br>";
    echo "I am a Btech Graduate.  <br>";
}

hello();
echo "<br>";
hello();
echo "<br>";
hello();
echo "<br>";
hello();
echo "<br>";
hello();*/

// functions with parameter
// function argument by reference.
// variable function
// recursive function
function fact($n){
    if ($n == 0){
        return 1;
    }else{
        return ($n * fact($n - 1));
    }
};
echo fact(5);
echo "<br>";
$fact = fact(0);
echo $fact;

?>