<?php
    /*
        Comparision Operators in php
        1. > greater
        2. < lesser
        3. >= greater than eqaual
        4. <= less than equal
        5. == equal to
        6. === equal value and equal type.
        7. != or <> not equal
        8. <=> spaceship operator return -1, 0 and 1
    
    $a = 20;
    $b = 20;
    echo $a > $b;
    */

    // if statement php.
    $x = 19;
    if($x > 20){
        echo "x is greater than 20";
    }
    else{
        echo "Number is smaller";
    };
    echo("<br>");

    // another way to write if statement
    $c = 10;
    $d = 3;
    if($c > $d):
        echo 'Yes you are correct';
    endif;
?>