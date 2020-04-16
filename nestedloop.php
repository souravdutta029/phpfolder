<?php
// Nested loop : loop within a loop 
/*for ($a = 1; $a <= 100; $a = $a +10){
    for($b = $a; $b < $a +10; $b++){
        echo $b. " ";
    }
    echo "<br>";

}*/

// Break and continue statements in php
// Continue :
/*for ($c = 1; $c < 11; $c++){
    if($c == 3){
        continue;
    }
    echo $c ."<br>";
}*/

// Break
/*for ($c = 1; $c <= 11; $c++){
    if($c == 4){
        break;
    }
    echo $c ."<br>";
}*/

// goto statement
echo "Sourav Dutta <br>";
echo "Sourav Dutta <br>";
echo "Sourav Dutta <br>";
goto abc;
echo "Sourav Dutta <br>";
echo "Sourav Dutta <br>";
echo "Sourav Dutta <br>";
echo "Sourav Dutta <br>";
echo "Sourav Dutta <br>";

abc:
    echo "I am form Kolkata";

?>
